<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\CreateUsageLimit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $amount
 * @property 'log'|'emit-metric'|'deactivate' $breachAction
 * @property 'daily'|'weekly'|'monthly' $period
 * @property string $resourceArn
 * @property string $usageLimitArn
 * @property string $usageLimitId
 * @property 'serverless-compute'|'cross-region-datasharing' $usageType
 */
class UsageLimit extends Shape
{
    /**
     * @param array{
     *     amount?: int,
     *     breachAction?: 'log'|'emit-metric'|'deactivate',
     *     period?: 'daily'|'weekly'|'monthly',
     *     resourceArn?: string,
     *     usageLimitArn?: string,
     *     usageLimitId?: string,
     *     usageType?: 'serverless-compute'|'cross-region-datasharing'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
