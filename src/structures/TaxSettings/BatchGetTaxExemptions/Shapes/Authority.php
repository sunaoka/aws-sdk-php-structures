<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchGetTaxExemptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $country
 * @property string $state
 */
class Authority extends Shape
{
    /**
     * @param array{
     *     country: string,
     *     state?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
