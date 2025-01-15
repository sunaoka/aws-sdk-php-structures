<?php

namespace Sunaoka\Aws\Structures\Emr\PutAutoTerminationPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $IdleTimeout
 */
class AutoTerminationPolicy extends Shape
{
    /**
     * @param array{IdleTimeout?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
