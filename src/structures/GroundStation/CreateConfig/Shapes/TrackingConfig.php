<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REQUIRED'|'PREFERRED'|'REMOVED' $autotrack
 */
class TrackingConfig extends Shape
{
    /**
     * @param array{autotrack: 'REQUIRED'|'PREFERRED'|'REMOVED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
