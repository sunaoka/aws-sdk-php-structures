<?php

namespace Sunaoka\Aws\Structures\Macie2\GetUsageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'accountId'|'total'|'serviceLimitValue'|'freeTrialStartDate' $key
 * @property 'ASC'|'DESC' $orderBy
 */
class UsageStatisticsSortBy extends Shape
{
    /**
     * @param array{
     *     key?: 'accountId'|'total'|'serviceLimitValue'|'freeTrialStartDate',
     *     orderBy?: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
