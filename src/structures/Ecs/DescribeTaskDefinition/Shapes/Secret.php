<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $valueFrom
 */
class Secret extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     valueFrom: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
