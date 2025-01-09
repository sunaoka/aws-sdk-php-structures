<?php

namespace Sunaoka\Aws\Structures\Scheduler\GetSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $field
 * @property 'random'|'spread'|'binpack' $type
 */
class PlacementStrategy extends Shape
{
    /**
     * @param array{
     *     field?: string,
     *     type?: 'random'|'spread'|'binpack'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
