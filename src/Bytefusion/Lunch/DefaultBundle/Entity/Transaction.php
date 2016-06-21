<?php

namespace Bytefusion\Lunch\DefaultBundle\Entity;

use Gedmo\Timestampable\Traits\TimestampableEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Transaction
 * @package Bytefusion\Lunch\DefaultBundle\Entity
 * @author Willem Slaghekke <willem.slaghekke@live.nl>
 *
 * @ORM\Entity()
 * @ORM\Table(name="lunch_transaction")
 */
class Transaction
{

    use TimestampableEntity;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Bytefusion\Lunch\DefaultBundle\Entity\Account")
     * @ORM\JoinColumn(name="fk_source_id", referencedColumnName="id")
     */
    protected $sourceAcccount;

    /**
     * @ORM\ManyToOne(targetEntity="Bytefusion\Lunch\DefaultBundle\Entity\Account")
     * @ORM\JoinColumn(name="fk_destination_id", referencedColumnName="id")
     */
    protected $destinationAccount;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    protected $amount;

}