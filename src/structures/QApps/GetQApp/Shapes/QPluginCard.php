<?php

namespace Sunaoka\Aws\Structures\QApps\GetQApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $title
 * @property list<string> $dependencies
 * @property 'text-input'|'q-query'|'file-upload'|'q-plugin'|'form-input' $type
 * @property string $prompt
 * @property 'SERVICE_NOW'|'SALESFORCE'|'JIRA'|'ZENDESK'|'CUSTOM'|'ASANA'|'ATLASSIAN_CONFLUENCE'|'GOOGLE_CALENDAR'|'JIRA_CLOUD'|'MICROSOFT_EXCHANGE'|'MICROSOFT_TEAMS'|'PAGERDUTY_ADVANCE'|'SALESFORCE_CRM'|'SERVICENOW_NOW_PLATFORM'|'SMARTSHEET'|'ZENDESK_SUITE' $pluginType
 * @property string $pluginId
 * @property string $actionIdentifier
 */
class QPluginCard extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     title: string,
     *     dependencies: list<string>,
     *     type: 'text-input'|'q-query'|'file-upload'|'q-plugin'|'form-input',
     *     prompt: string,
     *     pluginType: 'SERVICE_NOW'|'SALESFORCE'|'JIRA'|'ZENDESK'|'CUSTOM'|'ASANA'|'ATLASSIAN_CONFLUENCE'|'GOOGLE_CALENDAR'|'JIRA_CLOUD'|'MICROSOFT_EXCHANGE'|'MICROSOFT_TEAMS'|'PAGERDUTY_ADVANCE'|'SALESFORCE_CRM'|'SERVICENOW_NOW_PLATFORM'|'SMARTSHEET'|'ZENDESK_SUITE',
     *     pluginId: string,
     *     actionIdentifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
