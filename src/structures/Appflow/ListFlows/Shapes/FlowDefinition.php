<?php

namespace Sunaoka\Aws\Structures\Appflow\ListFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $flowArn
 * @property string $description
 * @property string $flowName
 * @property 'Active'|'Deprecated'|'Deleted'|'Draft'|'Errored'|'Suspended' $flowStatus
 * @property 'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot' $sourceConnectorType
 * @property string $sourceConnectorLabel
 * @property 'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot' $destinationConnectorType
 * @property string $destinationConnectorLabel
 * @property 'Scheduled'|'Event'|'OnDemand' $triggerType
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $createdBy
 * @property string $lastUpdatedBy
 * @property array<string, string> $tags
 * @property ExecutionDetails $lastRunExecutionDetails
 */
class FlowDefinition extends Shape
{
    /**
     * @param array{
     *     flowArn?: string,
     *     description?: string,
     *     flowName?: string,
     *     flowStatus?: 'Active'|'Deprecated'|'Deleted'|'Draft'|'Errored'|'Suspended',
     *     sourceConnectorType?: 'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot',
     *     sourceConnectorLabel?: string,
     *     destinationConnectorType?: 'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot',
     *     destinationConnectorLabel?: string,
     *     triggerType?: 'Scheduled'|'Event'|'OnDemand',
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     createdBy?: string,
     *     lastUpdatedBy?: string,
     *     tags?: array<string, string>,
     *     lastRunExecutionDetails?: ExecutionDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
