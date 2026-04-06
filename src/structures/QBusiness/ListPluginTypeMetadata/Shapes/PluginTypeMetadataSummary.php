<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListPluginTypeMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SERVICE_NOW'|'SALESFORCE'|'JIRA'|'ZENDESK'|'CUSTOM'|'QUICKSIGHT'|'SERVICENOW_NOW_PLATFORM'|'JIRA_CLOUD'|'SALESFORCE_CRM'|'ZENDESK_SUITE'|'ATLASSIAN_CONFLUENCE'|'GOOGLE_CALENDAR'|'MICROSOFT_TEAMS'|'MICROSOFT_EXCHANGE'|'PAGERDUTY_ADVANCE'|'SMARTSHEET'|'ASANA'|null $type
 * @property 'Customer relationship management (CRM)'|'Project management'|'Communication'|'Productivity'|'Ticketing and incident management'|null $category
 * @property string|null $description
 */
class PluginTypeMetadataSummary extends Shape
{
    /**
     * @param array{
     *     type?: 'SERVICE_NOW'|'SALESFORCE'|'JIRA'|'ZENDESK'|'CUSTOM'|'QUICKSIGHT'|'SERVICENOW_NOW_PLATFORM'|'JIRA_CLOUD'|'SALESFORCE_CRM'|'ZENDESK_SUITE'|'ATLASSIAN_CONFLUENCE'|'GOOGLE_CALENDAR'|'MICROSOFT_TEAMS'|'MICROSOFT_EXCHANGE'|'PAGERDUTY_ADVANCE'|'SMARTSHEET'|'ASANA'|null,
     *     category?: 'Customer relationship management (CRM)'|'Project management'|'Communication'|'Productivity'|'Ticketing and incident management'|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
