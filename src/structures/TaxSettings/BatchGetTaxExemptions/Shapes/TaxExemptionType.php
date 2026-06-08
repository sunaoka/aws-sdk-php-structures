<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchGetTaxExemptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $displayName
 * @property string|null $description
 * @property list<Authority>|null $applicableJurisdictions
 */
class TaxExemptionType extends Shape
{
    /**
     * @param array{
     *     displayName?: string|null,
     *     description?: string|null,
     *     applicableJurisdictions?: list<Authority>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
