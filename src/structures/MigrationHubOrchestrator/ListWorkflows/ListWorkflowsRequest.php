<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\ListWorkflows;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $templateId
 * @property string|null $adsApplicationConfigurationName
 * @property 'CREATING'|'NOT_STARTED'|'CREATION_FAILED'|'STARTING'|'IN_PROGRESS'|'WORKFLOW_FAILED'|'PAUSED'|'PAUSING'|'PAUSING_FAILED'|'USER_ATTENTION_REQUIRED'|'DELETING'|'DELETION_FAILED'|'DELETED'|'COMPLETED'|null $status
 * @property string|null $name
 */
class ListWorkflowsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<0, 100>|null,
     *     nextToken?: string|null,
     *     templateId?: string|null,
     *     adsApplicationConfigurationName?: string|null,
     *     status?: 'CREATING'|'NOT_STARTED'|'CREATION_FAILED'|'STARTING'|'IN_PROGRESS'|'WORKFLOW_FAILED'|'PAUSED'|'PAUSING'|'PAUSING_FAILED'|'USER_ATTENTION_REQUIRED'|'DELETING'|'DELETION_FAILED'|'DELETED'|'COMPLETED'|null,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
