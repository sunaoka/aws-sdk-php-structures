<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $input
 * @property HistoryEventExecutionDataDetails|null $inputDetails
 * @property string|null $roleArn
 * @property string|null $stateMachineAliasArn
 * @property string|null $stateMachineVersionArn
 */
class ExecutionStartedEventDetails extends Shape
{
    /**
     * @param array{
     *     input?: string|null,
     *     inputDetails?: HistoryEventExecutionDataDetails|null,
     *     roleArn?: string|null,
     *     stateMachineAliasArn?: string|null,
     *     stateMachineVersionArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
