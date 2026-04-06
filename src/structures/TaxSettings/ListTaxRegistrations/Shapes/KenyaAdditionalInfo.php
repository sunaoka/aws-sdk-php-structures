<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Legal Person'|'Physical Person'|'Business' $personType
 */
class KenyaAdditionalInfo extends Shape
{
    /**
     * @param array{personType: 'Legal Person'|'Physical Person'|'Business'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
