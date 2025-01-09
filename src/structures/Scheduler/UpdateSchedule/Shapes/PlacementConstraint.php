<?php

namespace Sunaoka\Aws\Structures\Scheduler\UpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $expression
 * @property 'distinctInstance'|'memberOf' $type
 */
class PlacementConstraint extends Shape
{
    /**
     * @param array{
     *     expression?: string,
     *     type?: 'distinctInstance'|'memberOf'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
