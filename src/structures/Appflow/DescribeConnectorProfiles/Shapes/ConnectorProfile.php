<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectorProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $connectorProfileArn
 * @property string $connectorProfileName
 * @property 'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot' $connectorType
 * @property string $connectorLabel
 * @property 'Public'|'Private' $connectionMode
 * @property string $credentialsArn
 * @property ConnectorProfileProperties $connectorProfileProperties
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property PrivateConnectionProvisioningState $privateConnectionProvisioningState
 */
class ConnectorProfile extends Shape
{
    /**
     * @param array{
     *     connectorProfileArn?: string,
     *     connectorProfileName?: string,
     *     connectorType?: 'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot',
     *     connectorLabel?: string,
     *     connectionMode?: 'Public'|'Private',
     *     credentialsArn?: string,
     *     connectorProfileProperties?: ConnectorProfileProperties,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     privateConnectionProvisioningState?: PrivateConnectionProvisioningState
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
