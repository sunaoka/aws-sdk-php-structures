<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeNotebookExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NotebookExecutionId
 * @property string $EditorId
 * @property ExecutionEngineConfig $ExecutionEngine
 * @property string $NotebookExecutionName
 * @property string $NotebookParams
 * @property 'START_PENDING'|'STARTING'|'RUNNING'|'FINISHING'|'FINISHED'|'FAILING'|'FAILED'|'STOP_PENDING'|'STOPPING'|'STOPPED' $Status
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $Arn
 * @property string $OutputNotebookURI
 * @property string $LastStateChangeReason
 * @property string $NotebookInstanceSecurityGroupId
 * @property list<Tag> $Tags
 * @property NotebookS3LocationForOutput $NotebookS3Location
 * @property OutputNotebookS3LocationForOutput $OutputNotebookS3Location
 * @property 'HTML' $OutputNotebookFormat
 * @property array<string, string> $EnvironmentVariables
 */
class NotebookExecution extends Shape
{
    /**
     * @param array{
     *     NotebookExecutionId?: string,
     *     EditorId?: string,
     *     ExecutionEngine?: ExecutionEngineConfig,
     *     NotebookExecutionName?: string,
     *     NotebookParams?: string,
     *     Status?: 'START_PENDING'|'STARTING'|'RUNNING'|'FINISHING'|'FINISHED'|'FAILING'|'FAILED'|'STOP_PENDING'|'STOPPING'|'STOPPED',
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     Arn?: string,
     *     OutputNotebookURI?: string,
     *     LastStateChangeReason?: string,
     *     NotebookInstanceSecurityGroupId?: string,
     *     Tags?: list<Tag>,
     *     NotebookS3Location?: NotebookS3LocationForOutput,
     *     OutputNotebookS3Location?: OutputNotebookS3LocationForOutput,
     *     OutputNotebookFormat?: 'HTML',
     *     EnvironmentVariables?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
