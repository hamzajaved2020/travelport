<?php

namespace FilippoToso\Travelport\GDSQueue;

class PermittedConnectionPoints
{

    /**
     * @var typeLocation $ConnectionPoint
     */
    protected $ConnectionPoint = null;

    /**
     * @param typeLocation $ConnectionPoint
     */
    public function __construct($ConnectionPoint = null)
    {
      $this->ConnectionPoint = $ConnectionPoint;
    }

    /**
     * @return typeLocation
     */
    public function getConnectionPoint()
    {
      return $this->ConnectionPoint;
    }

    /**
     * @param typeLocation $ConnectionPoint
     * @return \FilippoToso\Travelport\GDSQueue\PermittedConnectionPoints
     */
    public function setConnectionPoint($ConnectionPoint)
    {
      $this->ConnectionPoint = $ConnectionPoint;
      return $this;
    }

}
