<?php
namespace EphenyxShop\PhenyxCore;
/**
 * Class ParamToolBar
 *
 * @since 2.1.0.0
 */
class ParamToolBarCore {	
    
    public $items = [];	

	public function __construct() {}	

	public function buildToolBar() {
        
       return ['items' => $this->items];
	}
    
}
