<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListUsageTotals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USD' $currency
 * @property double $estimatedMonthlyCost
 * @property double $total
 * @property 'EC2_INSTANCE_HOURS'|'ECR_INITIAL_SCAN'|'ECR_RESCAN'|'LAMBDA_FUNCTION_HOURS'|'LAMBDA_FUNCTION_CODE_HOURS' $type
 */
class Usage extends Shape
{
    /**
     * @param array{
     *     currency?: 'USD',
     *     estimatedMonthlyCost?: double,
     *     total?: double,
     *     type?: 'EC2_INSTANCE_HOURS'|'ECR_INITIAL_SCAN'|'ECR_RESCAN'|'LAMBDA_FUNCTION_HOURS'|'LAMBDA_FUNCTION_CODE_HOURS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
