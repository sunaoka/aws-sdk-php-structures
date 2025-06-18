<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListUsageTotals\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USD'|null $currency
 * @property double|null $estimatedMonthlyCost
 * @property double|null $total
 * @property 'EC2_INSTANCE_HOURS'|'ECR_INITIAL_SCAN'|'ECR_RESCAN'|'LAMBDA_FUNCTION_HOURS'|'LAMBDA_FUNCTION_CODE_HOURS'|'CODE_REPOSITORY_SAST'|'CODE_REPOSITORY_IAC'|'CODE_REPOSITORY_SCA'|null $type
 */
class Usage extends Shape
{
    /**
     * @param array{
     *     currency?: 'USD'|null,
     *     estimatedMonthlyCost?: double|null,
     *     total?: double|null,
     *     type?: 'EC2_INSTANCE_HOURS'|'ECR_INITIAL_SCAN'|'ECR_RESCAN'|'LAMBDA_FUNCTION_HOURS'|'LAMBDA_FUNCTION_CODE_HOURS'|'CODE_REPOSITORY_SAST'|'CODE_REPOSITORY_IAC'|'CODE_REPOSITORY_SCA'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
