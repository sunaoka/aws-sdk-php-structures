<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxExemptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Authority $authority
 * @property TaxExemptionType $taxExemptionType
 * @property \Aws\Api\DateTimeResult|null $effectiveDate
 * @property \Aws\Api\DateTimeResult|null $expirationDate
 * @property \Aws\Api\DateTimeResult|null $systemEffectiveDate
 * @property 'None'|'Valid'|'Expired'|'Pending'|null $status
 */
class TaxExemption extends Shape
{
    /**
     * @param array{
     *     authority: Authority,
     *     taxExemptionType: TaxExemptionType,
     *     effectiveDate?: \Aws\Api\DateTimeResult|null,
     *     expirationDate?: \Aws\Api\DateTimeResult|null,
     *     systemEffectiveDate?: \Aws\Api\DateTimeResult|null,
     *     status?: 'None'|'Valid'|'Expired'|'Pending'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
