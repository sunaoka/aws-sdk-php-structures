<?php

namespace Sunaoka\Aws\Structures\kendra\ListGroupsOlderThanOrderingId\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupId
 * @property int<0, 32535158400000> $OrderingId
 */
class GroupSummary extends Shape
{
    /**
     * @param array{
     *     GroupId?: string,
     *     OrderingId?: int<0, 32535158400000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
