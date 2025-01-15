<?php

namespace Sunaoka\Aws\Structures\Macie2\GetUsageStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GT'|'GTE'|'LT'|'LTE'|'EQ'|'NE'|'CONTAINS'|null $comparator
 * @property 'accountId'|'serviceLimit'|'freeTrialStartDate'|'total'|null $key
 * @property list<string>|null $values
 */
class UsageStatisticsFilter extends Shape
{
    /**
     * @param array{
     *     comparator?: 'GT'|'GTE'|'LT'|'LTE'|'EQ'|'NE'|'CONTAINS'|null,
     *     key?: 'accountId'|'serviceLimit'|'freeTrialStartDate'|'total'|null,
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
