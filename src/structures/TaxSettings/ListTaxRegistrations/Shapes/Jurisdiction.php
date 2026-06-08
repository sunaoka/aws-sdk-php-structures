<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $stateOrRegion
 * @property string $countryCode
 */
class Jurisdiction extends Shape
{
    /**
     * @param array{
     *     stateOrRegion?: string|null,
     *     countryCode: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
