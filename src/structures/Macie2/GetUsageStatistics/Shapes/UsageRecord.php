<?php

namespace Sunaoka\Aws\Structures\Macie2\GetUsageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property \Aws\Api\DateTimeResult $automatedDiscoveryFreeTrialStartDate
 * @property \Aws\Api\DateTimeResult $freeTrialStartDate
 * @property list<UsageByAccount> $usage
 */
class UsageRecord extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     automatedDiscoveryFreeTrialStartDate?: \Aws\Api\DateTimeResult,
     *     freeTrialStartDate?: \Aws\Api\DateTimeResult,
     *     usage?: list<UsageByAccount>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
