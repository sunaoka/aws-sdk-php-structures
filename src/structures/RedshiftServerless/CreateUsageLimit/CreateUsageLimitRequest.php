<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\CreateUsageLimit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $amount
 * @property 'log'|'emit-metric'|'deactivate'|null $breachAction
 * @property 'daily'|'weekly'|'monthly'|null $period
 * @property string $resourceArn
 * @property 'serverless-compute'|'cross-region-datasharing' $usageType
 */
class CreateUsageLimitRequest extends Request
{
    /**
     * @param array{
     *     amount: int,
     *     breachAction?: 'log'|'emit-metric'|'deactivate'|null,
     *     period?: 'daily'|'weekly'|'monthly'|null,
     *     resourceArn: string,
     *     usageType: 'serverless-compute'|'cross-region-datasharing'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
