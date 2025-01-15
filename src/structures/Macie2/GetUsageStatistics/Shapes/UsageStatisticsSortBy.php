<?php

namespace Sunaoka\Aws\Structures\Macie2\GetUsageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'accountId'|'total'|'serviceLimitValue'|'freeTrialStartDate'|null $key
 * @property 'ASC'|'DESC'|null $orderBy
 */
class UsageStatisticsSortBy extends Shape
{
    /**
     * @param array{
     *     key?: 'accountId'|'total'|'serviceLimitValue'|'freeTrialStartDate'|null,
     *     orderBy?: 'ASC'|'DESC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
