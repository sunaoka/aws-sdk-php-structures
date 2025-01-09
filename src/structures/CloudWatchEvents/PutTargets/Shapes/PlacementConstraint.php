<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\PutTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'distinctInstance'|'memberOf' $type
 * @property string $expression
 */
class PlacementConstraint extends Shape
{
    /**
     * @param array{
     *     type?: 'distinctInstance'|'memberOf',
     *     expression?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
