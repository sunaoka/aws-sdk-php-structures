<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $workerName
 */
class ActivityStartedEventDetails extends Shape
{
    /**
     * @param array{workerName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
