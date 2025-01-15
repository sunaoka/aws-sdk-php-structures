<?php

namespace Sunaoka\Aws\Structures\Macie2\GetUsageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property \Aws\Api\DateTimeResult|null $automatedDiscoveryFreeTrialStartDate
 * @property \Aws\Api\DateTimeResult|null $freeTrialStartDate
 * @property list<UsageByAccount>|null $usage
 */
class UsageRecord extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     automatedDiscoveryFreeTrialStartDate?: \Aws\Api\DateTimeResult|null,
     *     freeTrialStartDate?: \Aws\Api\DateTimeResult|null,
     *     usage?: list<UsageByAccount>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
