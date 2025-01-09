<?php

namespace Sunaoka\Aws\Structures\DAX\DescribeClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SecurityGroupIdentifier
 * @property string $Status
 */
class SecurityGroupMembership extends Shape
{
    /**
     * @param array{
     *     SecurityGroupIdentifier?: string,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
