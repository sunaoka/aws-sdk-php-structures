<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Intra-EU'|'Local' $registrationType
 */
class SpainAdditionalInfo extends Shape
{
    /**
     * @param array{registrationType: 'Intra-EU'|'Local'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
