<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetPlugin;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $applicationId
 * @property string|null $pluginId
 * @property string|null $displayName
 * @property 'SERVICE_NOW'|'SALESFORCE'|'JIRA'|'ZENDESK'|'CUSTOM'|null $type
 * @property string|null $serverUrl
 * @property Shapes\PluginAuthConfiguration|null $authConfiguration
 * @property Shapes\CustomPluginConfiguration|null $customPluginConfiguration
 * @property 'READY'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|null $buildStatus
 * @property string|null $pluginArn
 * @property 'ENABLED'|'DISABLED'|null $state
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class GetPluginResponse extends Response
{
}
