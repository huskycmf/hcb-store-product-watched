<?php
namespace HcbStoreProductWatched\Entity;

use HcCore\Entity\EntityInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Watched
 *
 * @ORM\Table(name="store_product_watched")
 * @ORM\Entity
 */
class Watched implements EntityInterface
{
    /**
     * @var Product
     *
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="HcbStoreProduct\Entity\Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="store_product_id", referencedColumnName="id")
     * })
     */
    private $product;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_timestamp", type="datetime", nullable=false)
     */
    private $createdTimestamp;

    /**
     * Set createdTimestamp
     *
     * @param \DateTime $createdTimestamp
     * @return Watched
     */
    public function setCreatedTimestamp($createdTimestamp)
    {
        $this->createdTimestamp = $createdTimestamp;

        return $this;
    }

    /**
     * Get createdTimestamp
     *
     * @return \DateTime 
     */
    public function getCreatedTimestamp()
    {
        return $this->createdTimestamp;
    }

    /**
     * Set product
     *
     * @param \HcbStoreProduct\Entity\Product $product
     * @return Watched
     */
    public function setProduct(\HcbStoreProduct\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \HcbStoreProduct\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }
}
