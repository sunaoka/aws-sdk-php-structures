<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'memberOf'|null $type
 * @property string|null $expression
 */
class TaskDefinitionPlacementConstraint extends Shape
{
    /**
     * @param array{
     *     type?: 'memberOf'|null,
     *     expression?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
