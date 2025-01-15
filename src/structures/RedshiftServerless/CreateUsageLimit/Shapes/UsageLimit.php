<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\CreateUsageLimit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $amount
 * @property 'log'|'emit-metric'|'deactivate'|null $breachAction
 * @property 'daily'|'weekly'|'monthly'|null $period
 * @property string|null $resourceArn
 * @property string|null $usageLimitArn
 * @property string|null $usageLimitId
 * @property 'serverless-compute'|'cross-region-datasharing'|null $usageType
 */
class UsageLimit extends Shape
{
    /**
     * @param array{
     *     amount?: int|null,
     *     breachAction?: 'log'|'emit-metric'|'deactivate'|null,
     *     period?: 'daily'|'weekly'|'monthly'|null,
     *     resourceArn?: string|null,
     *     usageLimitArn?: string|null,
     *     usageLimitId?: string|null,
     *     usageType?: 'serverless-compute'|'cross-region-datasharing'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
