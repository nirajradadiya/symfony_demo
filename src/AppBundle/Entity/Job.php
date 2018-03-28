<?php
// src/AppBundle/Entity/Job.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity
 * @ORM\Table(name="job")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\JobRepository")
 */

class Job
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string
     * @ORM\Column(name="title",type="string", length=255)
     */
    protected $title;
     
    /**
     * @Gedmo\Slug(fields={"title"}, updatable=false)
     * @ORM\Column(length=255, unique=true)
     */ 
    protected $slug;
    
    /**
     * @var string
     * @ORM\Column(name="description",type="string", nullable=true)
     */
    protected $description;
    
    /**
     * @var string
     * @ORM\Column(name="experience_month",type="integer", length=2)
     */
    protected $experienceMonth;
    
    /**
     * @var string
     * @ORM\Column(name="experience_year",type="integer", length=3)
     */
    protected $experienceYear;
     
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Company")
     * @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     */
    protected $company;
    
    /**
     * @var string
     * @ORM\Column(name="website",type="string", length=255)
     */
    protected $website;
    
    /**
     * @var string
     * @ORM\Column(name="responisibilities",type="string")
     */
    protected $responisibilities;
    
    /**
     * @var string
     * @ORM\Column(name="inteview_time", type="string")
     */
    protected $inteviewTime;
    
    /**
     * @var string
     * @ORM\Column(name="contact_address",type="string")
     */
    protected $contactAddress;
    
    /**
     * @var string
     * @ORM\Column(name="contact_email",type="string", length=150)
     */
    protected $contactEmail;
    
    /**
     * @var string
     * @ORM\Column(name="contact_mobile",type="string", length=50)
     */
    protected $contactMobile;
    
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;
    
	/**
     * @var string
     * @ORM\Column(name="status", type="string", columnDefinition="ENUM('Active','Inactive','Blocked','Deleted')" ) 
     */
    protected $status = 'Active';
	
    
    /**
     * @var \DateTime
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     * @Gedmo\Timestampable(on="create")
     */
    protected $createdat;

    /**
     * @var \DateTime
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     * @Gedmo\Timestampable(on="update")
     */
    protected $updatedat;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Job
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Job
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Job
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set experienceMonth
     *
     * @param integer $experienceMonth
     *
     * @return Job
     */
    public function setExperienceMonth($experienceMonth)
    {
        $this->experienceMonth = $experienceMonth;

        return $this;
    }

    /**
     * Get experienceMonth
     *
     * @return integer
     */
    public function getExperienceMonth()
    {
        return $this->experienceMonth;
    }

    /**
     * Set experienceYear
     *
     * @param integer $experienceYear
     *
     * @return Job
     */
    public function setExperienceYear($experienceYear)
    {
        $this->experienceYear = $experienceYear;

        return $this;
    }

    /**
     * Get experienceYear
     *
     * @return integer
     */
    public function getExperienceYear()
    {
        return $this->experienceYear;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return Job
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set responisibilities
     *
     * @param string $responisibilities
     *
     * @return Job
     */
    public function setResponisibilities($responisibilities)
    {
        $this->responisibilities = $responisibilities;

        return $this;
    }

    /**
     * Get responisibilities
     *
     * @return string
     */
    public function getResponisibilities()
    {
        return $this->responisibilities;
    }

    /**
     * Set inteviewTime
     *
     * @param string $inteviewTime
     *
     * @return Job
     */
    public function setInteviewTime($inteviewTime)
    {
        $this->inteviewTime = $inteviewTime;

        return $this;
    }

    /**
     * Get inteviewTime
     *
     * @return string
     */
    public function getInteviewTime()
    {
        return $this->inteviewTime;
    }

    /**
     * Set contactAddress
     *
     * @param string $contactAddress
     *
     * @return Job
     */
    public function setContactAddress($contactAddress)
    {
        $this->contactAddress = $contactAddress;

        return $this;
    }

    /**
     * Get contactAddress
     *
     * @return string
     */
    public function getContactAddress()
    {
        return $this->contactAddress;
    }

    /**
     * Set contactEmail
     *
     * @param string $contactEmail
     *
     * @return Job
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;

        return $this;
    }

    /**
     * Get contactEmail
     *
     * @return string
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * Set contactMobile
     *
     * @param string $contactMobile
     *
     * @return Job
     */
    public function setContactMobile($contactMobile)
    {
        $this->contactMobile = $contactMobile;

        return $this;
    }

    /**
     * Get contactMobile
     *
     * @return string
     */
    public function getContactMobile()
    {
        return $this->contactMobile;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Job
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set createdat
     *
     * @param \DateTime $createdat
     *
     * @return Job
     */
    public function setCreatedat($createdat)
    {
        $this->createdat = $createdat;

        return $this;
    }

    /**
     * Get createdat
     *
     * @return \DateTime
     */
    public function getCreatedat()
    {
        return $this->createdat;
    }

    /**
     * Set updatedat
     *
     * @param \DateTime $updatedat
     *
     * @return Job
     */
    public function setUpdatedat($updatedat)
    {
        $this->updatedat = $updatedat;

        return $this;
    }

    /**
     * Get updatedat
     *
     * @return \DateTime
     */
    public function getUpdatedat()
    {
        return $this->updatedat;
    }

    /**
     * Set company
     *
     * @param \AppBundle\Entity\Company $company
     *
     * @return Job
     */
    public function setCompany(\AppBundle\Entity\Company $company = null)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return \AppBundle\Entity\Company
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Job
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
