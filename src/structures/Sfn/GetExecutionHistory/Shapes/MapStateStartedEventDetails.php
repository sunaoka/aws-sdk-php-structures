<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $length
 */
class MapStateStartedEventDetails extends Shape
{
    /**
     * @param array{length?: int<0, max>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
