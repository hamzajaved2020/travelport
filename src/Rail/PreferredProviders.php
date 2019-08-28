<?php

namespace FilippoToso\Travelport\Rail;

class PreferredProviders
{

    /**
     * @var Provider $Provider
     */
    protected $Provider = null;

    /**
     * @param Provider $Provider
     */
    public function __construct($Provider = null)
    {
      $this->Provider = $Provider;
    }

    /**
     * @return Provider
     */
    public function getProvider()
    {
      return $this->Provider;
    }

    /**
     * @param Provider $Provider
     * @return \FilippoToso\Travelport\Rail\PreferredProviders
     */
    public function setProvider($Provider)
    {
      $this->Provider = $Provider;
      return $this;
    }

}
