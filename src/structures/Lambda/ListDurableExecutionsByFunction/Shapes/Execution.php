<?php

namespace Sunaoka\Aws\Structures\Lambda\ListDurableExecutionsByFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DurableExecutionArn
 * @property string $DurableExecutionName
 * @property string $FunctionArn
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'STOPPED' $Status
 * @property \Aws\Api\DateTimeResult $StartTimestamp
 * @property \Aws\Api\DateTimeResult|null $EndTimestamp
 */
class Execution extends Shape
{
    /**
     * @param array{
     *     DurableExecutionArn: string,
     *     DurableExecutionName: string,
     *     FunctionArn: string,
     *     Status: 'RUNNING'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'STOPPED',
     *     StartTimestamp: \Aws\Api\DateTimeResult,
     *     EndTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
