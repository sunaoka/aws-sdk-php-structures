<?php

namespace Sunaoka\Aws\Structures\Appflow\ListFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $flowArn
 * @property string|null $description
 * @property string|null $flowName
 * @property 'Active'|'Deprecated'|'Deleted'|'Draft'|'Errored'|'Suspended'|null $flowStatus
 * @property 'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot'|null $sourceConnectorType
 * @property string|null $sourceConnectorLabel
 * @property 'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot'|null $destinationConnectorType
 * @property string|null $destinationConnectorLabel
 * @property 'Scheduled'|'Event'|'OnDemand'|null $triggerType
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property string|null $createdBy
 * @property string|null $lastUpdatedBy
 * @property array<string, string>|null $tags
 * @property ExecutionDetails|null $lastRunExecutionDetails
 */
class FlowDefinition extends Shape
{
    /**
     * @param array{
     *     flowArn?: string|null,
     *     description?: string|null,
     *     flowName?: string|null,
     *     flowStatus?: 'Active'|'Deprecated'|'Deleted'|'Draft'|'Errored'|'Suspended'|null,
     *     sourceConnectorType?: 'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot'|null,
     *     sourceConnectorLabel?: string|null,
     *     destinationConnectorType?: 'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot'|null,
     *     destinationConnectorLabel?: string|null,
     *     triggerType?: 'Scheduled'|'Event'|'OnDemand'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     lastUpdatedBy?: string|null,
     *     tags?: array<string, string>|null,
     *     lastRunExecutionDetails?: ExecutionDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
