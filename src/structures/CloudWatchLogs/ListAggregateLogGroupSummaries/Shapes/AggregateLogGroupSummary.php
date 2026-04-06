<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListAggregateLogGroupSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $logGroupCount
 * @property list<GroupingIdentifier>|null $groupingIdentifiers
 */
class AggregateLogGroupSummary extends Shape
{
    /**
     * @param array{
     *     logGroupCount?: int|null,
     *     groupingIdentifiers?: list<GroupingIdentifier>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
