<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'distinctInstance'|'memberOf'|null $type
 * @property string|null $expression
 */
class PlacementConstraint extends Shape
{
    /**
     * @param array{
     *     type?: 'distinctInstance'|'memberOf'|null,
     *     expression?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
