<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchGetTaxExemptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Authority $authority
 * @property \Aws\Api\DateTimeResult $effectiveDate
 * @property \Aws\Api\DateTimeResult $expirationDate
 * @property 'None'|'Valid'|'Expired'|'Pending' $status
 * @property \Aws\Api\DateTimeResult $systemEffectiveDate
 * @property TaxExemptionType $taxExemptionType
 */
class TaxExemption extends Shape
{
    /**
     * @param array{
     *     authority: Authority,
     *     effectiveDate?: \Aws\Api\DateTimeResult,
     *     expirationDate?: \Aws\Api\DateTimeResult,
     *     status?: 'None'|'Valid'|'Expired'|'Pending',
     *     systemEffectiveDate?: \Aws\Api\DateTimeResult,
     *     taxExemptionType: TaxExemptionType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
