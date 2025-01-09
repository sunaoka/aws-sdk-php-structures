<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeGlobalReplicationGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GlobalNodeGroupId
 * @property string $Slots
 */
class GlobalNodeGroup extends Shape
{
    /**
     * @param array{
     *     GlobalNodeGroupId?: string,
     *     Slots?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
