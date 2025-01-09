<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PREFERRED'|'REMOVED'|'REQUIRED' $autotrack
 */
class TrackingConfig extends Shape
{
    /**
     * @param array{autotrack: 'PREFERRED'|'REMOVED'|'REQUIRED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
