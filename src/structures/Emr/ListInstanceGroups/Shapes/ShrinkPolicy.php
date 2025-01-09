<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DecommissionTimeout
 * @property InstanceResizePolicy $InstanceResizePolicy
 */
class ShrinkPolicy extends Shape
{
    /**
     * @param array{
     *     DecommissionTimeout?: int,
     *     InstanceResizePolicy?: InstanceResizePolicy
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
