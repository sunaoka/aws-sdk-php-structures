<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListPluginTypeActions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'SERVICE_NOW'|'SALESFORCE'|'JIRA'|'ZENDESK'|'CUSTOM'|'QUICKSIGHT'|'SERVICENOW_NOW_PLATFORM'|'JIRA_CLOUD'|'SALESFORCE_CRM'|'ZENDESK_SUITE'|'ATLASSIAN_CONFLUENCE'|'GOOGLE_CALENDAR'|'MICROSOFT_TEAMS'|'MICROSOFT_EXCHANGE'|'PAGERDUTY_ADVANCE'|'SMARTSHEET'|'ASANA' $pluginType
 * @property string $nextToken
 * @property int<1, 50> $maxResults
 */
class ListPluginTypeActionsRequest extends Request
{
    /**
     * @param array{
     *     pluginType: 'SERVICE_NOW'|'SALESFORCE'|'JIRA'|'ZENDESK'|'CUSTOM'|'QUICKSIGHT'|'SERVICENOW_NOW_PLATFORM'|'JIRA_CLOUD'|'SALESFORCE_CRM'|'ZENDESK_SUITE'|'ATLASSIAN_CONFLUENCE'|'GOOGLE_CALENDAR'|'MICROSOFT_TEAMS'|'MICROSOFT_EXCHANGE'|'PAGERDUTY_ADVANCE'|'SMARTSHEET'|'ASANA',
     *     nextToken?: string,
     *     maxResults?: int<1, 50>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
