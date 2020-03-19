<?php

namespace App\Repository;

use App\Entity\OCPlatformBundleAdvert;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method OCPlatformBundleAdvert|null find($id, $lockMode = null, $lockVersion = null)
 * @method OCPlatformBundleAdvert|null findOneBy(array $criteria, array $orderBy = null)
 * @method OCPlatformBundleAdvert[]    findAll()
 * @method OCPlatformBundleAdvert[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OCPlatformBundleAdvertRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OCPlatformBundleAdvert::class);
    }

    // /**
    //  * @return OCPlatformBundleAdvert[] Returns an array of OCPlatformBundleAdvert objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OCPlatformBundleAdvert
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
