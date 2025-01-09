<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindingStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $count
 * @property string $groupKey
 */
class GroupCount extends Shape
{
    /**
     * @param array{
     *     count?: int,
     *     groupKey?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
