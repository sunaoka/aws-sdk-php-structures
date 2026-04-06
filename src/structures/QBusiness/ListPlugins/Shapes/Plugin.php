<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListPlugins\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $pluginId
 * @property string|null $displayName
 * @property 'SERVICE_NOW'|'SALESFORCE'|'JIRA'|'ZENDESK'|'CUSTOM'|null $type
 * @property string|null $serverUrl
 * @property 'ENABLED'|'DISABLED'|null $state
 * @property 'READY'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|null $buildStatus
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class Plugin extends Shape
{
    /**
     * @param array{
     *     pluginId?: string|null,
     *     displayName?: string|null,
     *     type?: 'SERVICE_NOW'|'SALESFORCE'|'JIRA'|'ZENDESK'|'CUSTOM'|null,
     *     serverUrl?: string|null,
     *     state?: 'ENABLED'|'DISABLED'|null,
     *     buildStatus?: 'READY'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
