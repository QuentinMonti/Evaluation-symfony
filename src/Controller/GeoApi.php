<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttpClient;

class GeoApi extends  AbstractController {
    /**
     * @Route("/answer", name="answer")
     */
    public function homepage(Request $request) {

        $name = $request->query->get('_name');
        $code = $request->query->get('_code');
        $client = HttpClient::create();
        $response = $client->request('GET', 'https://geo.api.gouv.fr/communes', [
            'query' => [
                'codePostal' => $code,
                'nom' => $name,
                'fields' => 'nom', 'codesPostaux',
                'format' => 'json',
            ],
        ]);
        $statusCode = $response->getStatusCode();
        $content = $response->getContent();

        $responseEtablissement = $client->request('GET', 'https://etablissements-publics.api.gouv.fr/v3/communes/', [
            'auth_basic' => [$code],
            'auth_basic' => ['pole_emplois'],
        ]);


        $statusCodeEtablissemnt = $responseEtablissement->getStatusCode();
        $contentEtablissement = $responseEtablissement->getContent();

        return $this->render('geoApi.html.twig', [
            'content' => $content,
            'status_code' => $statusCode,
            'content_etablissement' => $contentEtablissement,
            'status_code_etablissement' => $statusCodeEtablissemnt,
        ]);
    }
}