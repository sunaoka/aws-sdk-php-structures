<?php

namespace Sunaoka\Aws\Structures\Sfn\UpdateStateMachine\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $logGroupArn
 */
class CloudWatchLogsLogGroup extends Shape
{
    /**
     * @param array{logGroupArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
