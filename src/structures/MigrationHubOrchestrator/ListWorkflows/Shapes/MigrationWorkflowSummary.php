<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\ListWorkflows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string $templateId
 * @property string $adsApplicationConfigurationName
 * @property 'CREATING'|'NOT_STARTED'|'CREATION_FAILED'|'STARTING'|'IN_PROGRESS'|'WORKFLOW_FAILED'|'PAUSED'|'PAUSING'|'PAUSING_FAILED'|'USER_ATTENTION_REQUIRED'|'DELETING'|'DELETION_FAILED'|'DELETED'|'COMPLETED' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $statusMessage
 * @property int $completedSteps
 * @property int $totalSteps
 */
class MigrationWorkflowSummary extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     name?: string,
     *     templateId?: string,
     *     adsApplicationConfigurationName?: string,
     *     status?: 'CREATING'|'NOT_STARTED'|'CREATION_FAILED'|'STARTING'|'IN_PROGRESS'|'WORKFLOW_FAILED'|'PAUSED'|'PAUSING'|'PAUSING_FAILED'|'USER_ATTENTION_REQUIRED'|'DELETING'|'DELETION_FAILED'|'DELETED'|'COMPLETED',
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     statusMessage?: string,
     *     completedSteps?: int,
     *     totalSteps?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
