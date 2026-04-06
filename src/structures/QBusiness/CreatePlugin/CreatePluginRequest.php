<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreatePlugin;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $displayName
 * @property 'SERVICE_NOW'|'SALESFORCE'|'JIRA'|'ZENDESK'|'CUSTOM'|'QUICKSIGHT'|'SERVICENOW_NOW_PLATFORM'|'JIRA_CLOUD'|'SALESFORCE_CRM'|'ZENDESK_SUITE'|'ATLASSIAN_CONFLUENCE'|'GOOGLE_CALENDAR'|'MICROSOFT_TEAMS'|'MICROSOFT_EXCHANGE'|'PAGERDUTY_ADVANCE'|'SMARTSHEET'|'ASANA' $type
 * @property Shapes\PluginAuthConfiguration $authConfiguration
 * @property string|null $serverUrl
 * @property Shapes\CustomPluginConfiguration|null $customPluginConfiguration
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $clientToken
 */
class CreatePluginRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     displayName: string,
     *     type: 'SERVICE_NOW'|'SALESFORCE'|'JIRA'|'ZENDESK'|'CUSTOM'|'QUICKSIGHT'|'SERVICENOW_NOW_PLATFORM'|'JIRA_CLOUD'|'SALESFORCE_CRM'|'ZENDESK_SUITE'|'ATLASSIAN_CONFLUENCE'|'GOOGLE_CALENDAR'|'MICROSOFT_TEAMS'|'MICROSOFT_EXCHANGE'|'PAGERDUTY_ADVANCE'|'SMARTSHEET'|'ASANA',
     *     authConfiguration: Shapes\PluginAuthConfiguration,
     *     serverUrl?: string|null,
     *     customPluginConfiguration?: Shapes\CustomPluginConfiguration|null,
     *     tags?: list<Shapes\Tag>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
