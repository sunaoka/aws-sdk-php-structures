<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxExemptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Authority> $applicableJurisdictions
 * @property string $description
 * @property string $displayName
 */
class TaxExemptionType extends Shape
{
    /**
     * @param array{
     *     applicableJurisdictions?: list<Authority>,
     *     description?: string,
     *     displayName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
