<?php

namespace Sunaoka\Aws\Structures\Sfn\UpdateStateMachine\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchLogsLogGroup|null $cloudWatchLogsLogGroup
 */
class LogDestination extends Shape
{
    /**
     * @param array{cloudWatchLogsLogGroup?: CloudWatchLogsLogGroup|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
