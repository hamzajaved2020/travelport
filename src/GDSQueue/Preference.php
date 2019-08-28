<?php

namespace FilippoToso\Travelport\GDSQueue;

class Preference
{

    /**
     * @var anonymous1448 $Owner
     */
    protected $Owner = null;

    /**
     * @param anonymous1448 $Owner
     */
    public function __construct($Owner = null)
    {
      $this->Owner = $Owner;
    }

    /**
     * @return anonymous1448
     */
    public function getOwner()
    {
      return $this->Owner;
    }

    /**
     * @param anonymous1448 $Owner
     * @return \FilippoToso\Travelport\GDSQueue\Preference
     */
    public function setOwner($Owner)
    {
      $this->Owner = $Owner;
      return $this;
    }

}
