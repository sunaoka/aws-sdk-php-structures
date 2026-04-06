<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Business'|'Individual' $ukraineTrnType
 */
class UkraineAdditionalInfo extends Shape
{
    /**
     * @param array{ukraineTrnType: 'Business'|'Individual'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
