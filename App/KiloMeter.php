<? php

namespace ConverterApp;

class KiloMeter extends Length
{
  protected power;
  public function __construct()
  {
    $this->power = 3;
    parent::__construct("KiloMeter","KM");
  }
}
