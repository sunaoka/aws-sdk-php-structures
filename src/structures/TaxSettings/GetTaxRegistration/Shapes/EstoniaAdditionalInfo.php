<?php

namespace Sunaoka\Aws\Structures\TaxSettings\GetTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $registryCommercialCode
 */
class EstoniaAdditionalInfo extends Shape
{
    /**
     * @param array{registryCommercialCode: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
