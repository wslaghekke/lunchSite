<?php

namespace Bytefusion\Lunch\DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\SoftDeleteable\Traits\SoftDeleteableEntity;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * Class Account
 * @package Bytefusion\Lunch\DefaultBundle\Entity
 * @author Willem Slaghekke <willem.slaghekke@live.nl>
 *
 * @ORM\Entity()
 * @ORM\Table(name="lunch_account")
 */
class Account
{

    use TimestampableEntity;
    use SoftDeleteableEntity;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Bytefusion\Lunch\DefaultBundle\Entity\User")
     * @ORM\JoinColumn(name="fk_owner_id", referencedColumnName="id", nullable=true)
     */
    protected $owner;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    protected $iban;

    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $image;

    /**
     * @ORM\Column(type="float")
     */
    protected $percentage = 0;
}
