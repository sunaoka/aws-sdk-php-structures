<?php

namespace Sunaoka\Aws\Structures\Ssm\ListNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InstanceInfo|null $Instance
 */
class NodeType extends Shape
{
    /**
     * @param array{Instance?: InstanceInfo|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
