<?php

namespace Sunaoka\Aws\Structures\Macie2\GetFindingStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $count
 * @property string|null $groupKey
 */
class GroupCount extends Shape
{
    /**
     * @param array{
     *     count?: int|null,
     *     groupKey?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
