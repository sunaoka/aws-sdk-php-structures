<?php

namespace Sunaoka\Aws\Structures\Ec2\RunInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Code
 * @property 'pending'|'running'|'shutting-down'|'terminated'|'stopping'|'stopped' $Name
 */
class InstanceState extends Shape
{
    /**
     * @param array{
     *     Code?: int,
     *     Name?: 'pending'|'running'|'shutting-down'|'terminated'|'stopping'|'stopped'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
