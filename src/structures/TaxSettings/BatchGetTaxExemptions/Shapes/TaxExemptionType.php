<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchGetTaxExemptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Authority>|null $applicableJurisdictions
 * @property string|null $description
 * @property string|null $displayName
 */
class TaxExemptionType extends Shape
{
    /**
     * @param array{
     *     applicableJurisdictions?: list<Authority>|null,
     *     description?: string|null,
     *     displayName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
