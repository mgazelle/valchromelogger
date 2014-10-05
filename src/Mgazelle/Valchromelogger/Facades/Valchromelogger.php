<?php namespace Mgazelle\Valchromelogger\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class Valchromelogger extends Facade {
 
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'valchromelogger'; }
 
}