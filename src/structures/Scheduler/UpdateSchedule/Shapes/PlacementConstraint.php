<?php

namespace Sunaoka\Aws\Structures\Scheduler\UpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $expression
 * @property 'distinctInstance'|'memberOf'|null $type
 */
class PlacementConstraint extends Shape
{
    /**
     * @param array{
     *     expression?: string|null,
     *     type?: 'distinctInstance'|'memberOf'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
