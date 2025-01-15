<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxExemptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $country
 * @property string|null $state
 */
class Authority extends Shape
{
    /**
     * @param array{
     *     country: string,
     *     state?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
