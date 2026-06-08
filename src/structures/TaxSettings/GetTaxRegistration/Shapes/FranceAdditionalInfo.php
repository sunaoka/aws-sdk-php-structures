<?php

namespace Sunaoka\Aws\Structures\TaxSettings\GetTaxRegistration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sirenNumber
 */
class FranceAdditionalInfo extends Shape
{
    /**
     * @param array{sirenNumber: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
