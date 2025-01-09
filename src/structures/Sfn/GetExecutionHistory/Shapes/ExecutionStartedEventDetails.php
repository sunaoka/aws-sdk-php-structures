<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $input
 * @property HistoryEventExecutionDataDetails $inputDetails
 * @property string $roleArn
 * @property string $stateMachineAliasArn
 * @property string $stateMachineVersionArn
 */
class ExecutionStartedEventDetails extends Shape
{
    /**
     * @param array{
     *     input?: string,
     *     inputDetails?: HistoryEventExecutionDataDetails,
     *     roleArn?: string,
     *     stateMachineAliasArn?: string,
     *     stateMachineVersionArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
