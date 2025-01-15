<?php

namespace Sunaoka\Aws\Structures\Ec2\StartInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Code
 * @property 'pending'|'running'|'shutting-down'|'terminated'|'stopping'|'stopped'|null $Name
 */
class InstanceState extends Shape
{
    /**
     * @param array{
     *     Code?: int|null,
     *     Name?: 'pending'|'running'|'shutting-down'|'terminated'|'stopping'|'stopped'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
