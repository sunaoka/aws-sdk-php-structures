<?php

namespace Sunaoka\Aws\Structures\Scheduler\GetSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $field
 * @property 'random'|'spread'|'binpack'|null $type
 */
class PlacementStrategy extends Shape
{
    /**
     * @param array{
     *     field?: string|null,
     *     type?: 'random'|'spread'|'binpack'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
