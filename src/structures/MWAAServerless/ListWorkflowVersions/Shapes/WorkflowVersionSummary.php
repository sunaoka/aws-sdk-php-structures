<?php

namespace Sunaoka\Aws\Structures\MWAAServerless\ListWorkflowVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WorkflowVersion
 * @property string $WorkflowArn
 * @property bool|null $IsLatestVersion
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $ModifiedAt
 * @property DefinitionS3Location|null $DefinitionS3Location
 * @property ScheduleConfiguration|null $ScheduleConfiguration
 * @property string|null $TriggerMode
 */
class WorkflowVersionSummary extends Shape
{
    /**
     * @param array{
     *     WorkflowVersion: string,
     *     WorkflowArn: string,
     *     IsLatestVersion?: bool|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     ModifiedAt?: \Aws\Api\DateTimeResult|null,
     *     DefinitionS3Location?: DefinitionS3Location|null,
     *     ScheduleConfiguration?: ScheduleConfiguration|null,
     *     TriggerMode?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
