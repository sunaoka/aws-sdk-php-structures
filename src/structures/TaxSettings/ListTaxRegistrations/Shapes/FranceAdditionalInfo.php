<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxRegistrations\Shapes;

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
