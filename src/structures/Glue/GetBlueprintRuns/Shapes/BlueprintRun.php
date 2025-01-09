<?php

namespace Sunaoka\Aws\Structures\Glue\GetBlueprintRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BlueprintName
 * @property string $RunId
 * @property string $WorkflowName
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'ROLLING_BACK' $State
 * @property \Aws\Api\DateTimeResult $StartedOn
 * @property \Aws\Api\DateTimeResult $CompletedOn
 * @property string $ErrorMessage
 * @property string $RollbackErrorMessage
 * @property string $Parameters
 * @property string $RoleArn
 */
class BlueprintRun extends Shape
{
    /**
     * @param array{
     *     BlueprintName?: string,
     *     RunId?: string,
     *     WorkflowName?: string,
     *     State?: 'RUNNING'|'SUCCEEDED'|'FAILED'|'ROLLING_BACK',
     *     StartedOn?: \Aws\Api\DateTimeResult,
     *     CompletedOn?: \Aws\Api\DateTimeResult,
     *     ErrorMessage?: string,
     *     RollbackErrorMessage?: string,
     *     Parameters?: string,
     *     RoleArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
