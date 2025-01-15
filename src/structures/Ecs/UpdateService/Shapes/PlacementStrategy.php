<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'random'|'spread'|'binpack'|null $type
 * @property string|null $field
 */
class PlacementStrategy extends Shape
{
    /**
     * @param array{
     *     type?: 'random'|'spread'|'binpack'|null,
     *     field?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
