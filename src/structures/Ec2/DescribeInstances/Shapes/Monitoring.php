<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'disabled'|'disabling'|'enabled'|'pending'|null $State
 */
class Monitoring extends Shape
{
    /**
     * @param array{State?: 'disabled'|'disabling'|'enabled'|'pending'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
