<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchGetTaxExemptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $heritageObtainedDetails
 * @property string|null $heritageObtainedParentEntity
 * @property string|null $heritageObtainedReason
 * @property list<TaxExemption>|null $taxExemptions
 */
class TaxExemptionDetails extends Shape
{
    /**
     * @param array{
     *     heritageObtainedDetails?: bool|null,
     *     heritageObtainedParentEntity?: string|null,
     *     heritageObtainedReason?: string|null,
     *     taxExemptions?: list<TaxExemption>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
