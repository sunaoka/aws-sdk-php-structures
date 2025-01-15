<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTaskRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransformId
 * @property string|null $TaskRunId
 * @property 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT'|null $Status
 * @property string|null $LogGroupName
 * @property TaskRunProperties|null $Properties
 * @property string|null $ErrorString
 * @property \Aws\Api\DateTimeResult|null $StartedOn
 * @property \Aws\Api\DateTimeResult|null $LastModifiedOn
 * @property \Aws\Api\DateTimeResult|null $CompletedOn
 * @property int|null $ExecutionTime
 */
class TaskRun extends Shape
{
    /**
     * @param array{
     *     TransformId?: string|null,
     *     TaskRunId?: string|null,
     *     Status?: 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT'|null,
     *     LogGroupName?: string|null,
     *     Properties?: TaskRunProperties|null,
     *     ErrorString?: string|null,
     *     StartedOn?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedOn?: \Aws\Api\DateTimeResult|null,
     *     CompletedOn?: \Aws\Api\DateTimeResult|null,
     *     ExecutionTime?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
