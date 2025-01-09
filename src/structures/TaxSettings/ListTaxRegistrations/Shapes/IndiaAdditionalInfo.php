<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $pan
 */
class IndiaAdditionalInfo extends Shape
{
    /**
     * @param array{pan?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
