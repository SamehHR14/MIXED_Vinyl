<?php

namespace App\Repository;

use App\Entity\VinlMix;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<VinlMix>
 *
 * @method VinlMix|null find($id, $lockMode = null, $lockVersion = null)
 * @method VinlMix|null findOneBy(array $criteria, array $orderBy = null)
 * @method VinlMix[]    findAll()
 * @method VinlMix[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VinlMixRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VinlMix::class);
    }

//    /**
//     * @return VinlMix[] Returns an array of VinlMix objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('v.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?VinlMix
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
