<?php

namespace Sunaoka\Aws\Structures\Ec2\RunInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'disabled'|'disabling'|'enabled'|'pending' $State
 */
class Monitoring extends Shape
{
    /**
     * @param array{State?: 'disabled'|'disabling'|'enabled'|'pending'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
