<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $length
 */
class MapStateStartedEventDetails extends Shape
{
    /**
     * @param array{length?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
