<?php

namespace Sunaoka\Aws\Structures\kendra\ListGroupsOlderThanOrderingId\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GroupId
 * @property int<0, 32535158400000>|null $OrderingId
 */
class GroupSummary extends Shape
{
    /**
     * @param array{
     *     GroupId?: string|null,
     *     OrderingId?: int<0, 32535158400000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
