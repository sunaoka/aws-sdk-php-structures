<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTaskRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransformId
 * @property string $TaskRunId
 * @property 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT' $Status
 * @property string $LogGroupName
 * @property TaskRunProperties $Properties
 * @property string $ErrorString
 * @property \Aws\Api\DateTimeResult $StartedOn
 * @property \Aws\Api\DateTimeResult $LastModifiedOn
 * @property \Aws\Api\DateTimeResult $CompletedOn
 * @property int $ExecutionTime
 */
class TaskRun extends Shape
{
    /**
     * @param array{
     *     TransformId?: string,
     *     TaskRunId?: string,
     *     Status?: 'STARTING'|'RUNNING'|'STOPPING'|'STOPPED'|'SUCCEEDED'|'FAILED'|'TIMEOUT',
     *     LogGroupName?: string,
     *     Properties?: TaskRunProperties,
     *     ErrorString?: string,
     *     StartedOn?: \Aws\Api\DateTimeResult,
     *     LastModifiedOn?: \Aws\Api\DateTimeResult,
     *     CompletedOn?: \Aws\Api\DateTimeResult,
     *     ExecutionTime?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
