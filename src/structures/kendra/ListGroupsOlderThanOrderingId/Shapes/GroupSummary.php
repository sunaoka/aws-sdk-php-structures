<?php

namespace Sunaoka\Aws\Structures\kendra\ListGroupsOlderThanOrderingId\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupId
 * @property int $OrderingId
 */
class GroupSummary extends Shape
{
    /**
     * @param array{
     *     GroupId?: string,
     *     OrderingId?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
