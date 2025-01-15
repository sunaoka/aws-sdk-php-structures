<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeNotebookExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NotebookExecutionId
 * @property string|null $EditorId
 * @property ExecutionEngineConfig|null $ExecutionEngine
 * @property string|null $NotebookExecutionName
 * @property string|null $NotebookParams
 * @property 'START_PENDING'|'STARTING'|'RUNNING'|'FINISHING'|'FINISHED'|'FAILING'|'FAILED'|'STOP_PENDING'|'STOPPING'|'STOPPED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string|null $Arn
 * @property string|null $OutputNotebookURI
 * @property string|null $LastStateChangeReason
 * @property string|null $NotebookInstanceSecurityGroupId
 * @property list<Tag>|null $Tags
 * @property NotebookS3LocationForOutput|null $NotebookS3Location
 * @property OutputNotebookS3LocationForOutput|null $OutputNotebookS3Location
 * @property 'HTML'|null $OutputNotebookFormat
 * @property array<string, string>|null $EnvironmentVariables
 */
class NotebookExecution extends Shape
{
    /**
     * @param array{
     *     NotebookExecutionId?: string|null,
     *     EditorId?: string|null,
     *     ExecutionEngine?: ExecutionEngineConfig|null,
     *     NotebookExecutionName?: string|null,
     *     NotebookParams?: string|null,
     *     Status?: 'START_PENDING'|'STARTING'|'RUNNING'|'FINISHING'|'FINISHED'|'FAILING'|'FAILED'|'STOP_PENDING'|'STOPPING'|'STOPPED'|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     Arn?: string|null,
     *     OutputNotebookURI?: string|null,
     *     LastStateChangeReason?: string|null,
     *     NotebookInstanceSecurityGroupId?: string|null,
     *     Tags?: list<Tag>|null,
     *     NotebookS3Location?: NotebookS3LocationForOutput|null,
     *     OutputNotebookS3Location?: OutputNotebookS3LocationForOutput|null,
     *     OutputNotebookFormat?: 'HTML'|null,
     *     EnvironmentVariables?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
