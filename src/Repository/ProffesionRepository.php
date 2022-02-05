<?php

namespace App\Repository;

use App\Entity\Proffesion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Proffesion|null find($id, $lockMode = null, $lockVersion = null)
 * @method Proffesion|null findOneBy(array $criteria, array $orderBy = null)
 * @method Proffesion[]    findAll()
 * @method Proffesion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProffesionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Proffesion::class);
    }

    // /**
    //  * @return Proffesion[] Returns an array of Proffesion objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Proffesion
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
