<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetPlugin;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $applicationId
 * @property string $pluginId
 * @property string $displayName
 * @property 'SERVICE_NOW'|'SALESFORCE'|'JIRA'|'ZENDESK'|'CUSTOM'|'QUICKSIGHT'|'SERVICENOW_NOW_PLATFORM'|'JIRA_CLOUD'|'SALESFORCE_CRM'|'ZENDESK_SUITE'|'ATLASSIAN_CONFLUENCE'|'GOOGLE_CALENDAR'|'MICROSOFT_TEAMS'|'MICROSOFT_EXCHANGE'|'PAGERDUTY_ADVANCE'|'SMARTSHEET'|'ASANA' $type
 * @property string $serverUrl
 * @property Shapes\PluginAuthConfiguration $authConfiguration
 * @property Shapes\CustomPluginConfiguration $customPluginConfiguration
 * @property 'READY'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED' $buildStatus
 * @property string $pluginArn
 * @property 'ENABLED'|'DISABLED' $state
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class GetPluginResponse extends Response
{
}
