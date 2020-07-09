<?php

namespace App\Repository;

use App\Entity\RdiUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RdiUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method RdiUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method RdiUser[]    findAll()
 * @method RdiUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RdiUserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RdiUser::class);
    }

    // /**
    //  * @return RdiUser[] Returns an array of RdiUser objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RdiUser
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
