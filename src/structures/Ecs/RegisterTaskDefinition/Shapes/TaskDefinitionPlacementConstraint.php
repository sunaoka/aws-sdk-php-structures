<?php

namespace Sunaoka\Aws\Structures\Ecs\RegisterTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'memberOf' $type
 * @property string $expression
 */
class TaskDefinitionPlacementConstraint extends Shape
{
    /**
     * @param array{
     *     type?: 'memberOf',
     *     expression?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
