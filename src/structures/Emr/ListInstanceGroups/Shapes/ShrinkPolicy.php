<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $DecommissionTimeout
 * @property InstanceResizePolicy|null $InstanceResizePolicy
 */
class ShrinkPolicy extends Shape
{
    /**
     * @param array{
     *     DecommissionTimeout?: int|null,
     *     InstanceResizePolicy?: InstanceResizePolicy|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
