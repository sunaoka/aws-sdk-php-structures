<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeGlobalReplicationGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GlobalNodeGroupId
 * @property string|null $Slots
 */
class GlobalNodeGroup extends Shape
{
    /**
     * @param array{
     *     GlobalNodeGroupId?: string|null,
     *     Slots?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
