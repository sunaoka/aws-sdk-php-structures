<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeCacheClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SecurityGroupId
 * @property string|null $Status
 */
class SecurityGroupMembership extends Shape
{
    /**
     * @param array{
     *     SecurityGroupId?: string|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
