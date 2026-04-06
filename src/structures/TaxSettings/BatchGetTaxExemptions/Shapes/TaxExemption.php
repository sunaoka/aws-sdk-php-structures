<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchGetTaxExemptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Authority $authority
 * @property \Aws\Api\DateTimeResult|null $effectiveDate
 * @property \Aws\Api\DateTimeResult|null $expirationDate
 * @property 'None'|'Valid'|'Expired'|'Pending'|null $status
 * @property \Aws\Api\DateTimeResult|null $systemEffectiveDate
 * @property TaxExemptionType $taxExemptionType
 */
class TaxExemption extends Shape
{
    /**
     * @param array{
     *     authority: Authority,
     *     effectiveDate?: \Aws\Api\DateTimeResult|null,
     *     expirationDate?: \Aws\Api\DateTimeResult|null,
     *     status?: 'None'|'Valid'|'Expired'|'Pending'|null,
     *     systemEffectiveDate?: \Aws\Api\DateTimeResult|null,
     *     taxExemptionType: TaxExemptionType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
