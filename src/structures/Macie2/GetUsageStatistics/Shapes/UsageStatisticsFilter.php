<?php

namespace Sunaoka\Aws\Structures\Macie2\GetUsageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GT'|'GTE'|'LT'|'LTE'|'EQ'|'NE'|'CONTAINS' $comparator
 * @property 'accountId'|'serviceLimit'|'freeTrialStartDate'|'total' $key
 * @property list<string> $values
 */
class UsageStatisticsFilter extends Shape
{
    /**
     * @param array{
     *     comparator?: 'GT'|'GTE'|'LT'|'LTE'|'EQ'|'NE'|'CONTAINS',
     *     key?: 'accountId'|'serviceLimit'|'freeTrialStartDate'|'total',
     *     values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
