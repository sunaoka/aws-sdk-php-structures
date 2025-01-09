<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SecurityGroupId
 * @property string $Status
 */
class SecurityGroupMembership extends Shape
{
    /**
     * @param array{
     *     SecurityGroupId?: string,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
