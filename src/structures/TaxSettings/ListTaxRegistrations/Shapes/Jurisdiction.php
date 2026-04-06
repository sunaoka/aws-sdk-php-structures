<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $countryCode
 * @property string|null $stateOrRegion
 */
class Jurisdiction extends Shape
{
    /**
     * @param array{
     *     countryCode: string,
     *     stateOrRegion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
