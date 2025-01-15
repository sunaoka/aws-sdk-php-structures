<?php

namespace Sunaoka\Aws\Structures\Glue\GetBlueprintRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BlueprintName
 * @property string|null $RunId
 * @property string|null $WorkflowName
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'ROLLING_BACK'|null $State
 * @property \Aws\Api\DateTimeResult|null $StartedOn
 * @property \Aws\Api\DateTimeResult|null $CompletedOn
 * @property string|null $ErrorMessage
 * @property string|null $RollbackErrorMessage
 * @property string|null $Parameters
 * @property string|null $RoleArn
 */
class BlueprintRun extends Shape
{
    /**
     * @param array{
     *     BlueprintName?: string|null,
     *     RunId?: string|null,
     *     WorkflowName?: string|null,
     *     State?: 'RUNNING'|'SUCCEEDED'|'FAILED'|'ROLLING_BACK'|null,
     *     StartedOn?: \Aws\Api\DateTimeResult|null,
     *     CompletedOn?: \Aws\Api\DateTimeResult|null,
     *     ErrorMessage?: string|null,
     *     RollbackErrorMessage?: string|null,
     *     Parameters?: string|null,
     *     RoleArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
