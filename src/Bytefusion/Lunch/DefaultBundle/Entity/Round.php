<?php

namespace Bytefusion\Lunch\DefaultBundle\Entity;

use Gedmo\Timestampable\Traits\TimestampableEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Round
 * @package Bytefusion\Lunch\DefaultBundle\Entity
 * @author Willem Slaghekke <willem.slaghekke@live.nl>
 *
 * @ORM\Entity()
 * @ORM\Table(name="lunch_round")
 */
class Round
{

    use TimestampableEntity;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    protected $amount;

    /**
     * @ORM\ManyToMany(targetEntity="Bytefusion\Lunch\DefaultBundle\Entity\Account")
     * @ORM\JoinTable(name="lunch_round_account",
     *     joinColumns={@ORM\JoinColumn(name="fk_round_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="fk_account_id", referencedColumnName="id")}
     *     )
     */
    protected $accounts;

}