<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $mapRunArn
 */
class MapRunStartedEventDetails extends Shape
{
    /**
     * @param array{mapRunArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
