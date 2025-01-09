<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxExemptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $heritageObtainedDetails
 * @property string $heritageObtainedParentEntity
 * @property string $heritageObtainedReason
 * @property list<TaxExemption> $taxExemptions
 */
class TaxExemptionDetails extends Shape
{
    /**
     * @param array{
     *     heritageObtainedDetails?: bool,
     *     heritageObtainedParentEntity?: string,
     *     heritageObtainedReason?: string,
     *     taxExemptions?: list<TaxExemption>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
