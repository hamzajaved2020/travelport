<?php

namespace FilippoToso\Travelport\UniversalRecord;

class AvailablePseudoCityCode
{

    /**
     * @var typePCC $PseudoCityCode
     */
    protected $PseudoCityCode = null;

    /**
     * @param typePCC $PseudoCityCode
     */
    public function __construct($PseudoCityCode = null)
    {
      $this->PseudoCityCode = $PseudoCityCode;
    }

    /**
     * @return typePCC
     */
    public function getPseudoCityCode()
    {
      return $this->PseudoCityCode;
    }

    /**
     * @param typePCC $PseudoCityCode
     * @return \FilippoToso\Travelport\UniversalRecord\AvailablePseudoCityCode
     */
    public function setPseudoCityCode($PseudoCityCode)
    {
      $this->PseudoCityCode = $PseudoCityCode;
      return $this;
    }

}
