<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxExemptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TaxExemption>|null $taxExemptions
 * @property bool|null $heritageObtainedDetails
 * @property string|null $heritageObtainedParentEntity
 * @property string|null $heritageObtainedReason
 */
class TaxExemptionDetails extends Shape
{
    /**
     * @param array{
     *     taxExemptions?: list<TaxExemption>|null,
     *     heritageObtainedDetails?: bool|null,
     *     heritageObtainedParentEntity?: string|null,
     *     heritageObtainedReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
