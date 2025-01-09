<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $countryCode
 * @property string $stateOrRegion
 */
class Jurisdiction extends Shape
{
    /**
     * @param array{
     *     countryCode: string,
     *     stateOrRegion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
