<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingStatisticsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GroupByField
 * @property list<GroupByValue>|null $GroupByValues
 */
class GroupByResult extends Shape
{
    /**
     * @param array{
     *     GroupByField?: string|null,
     *     GroupByValues?: list<GroupByValue>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
