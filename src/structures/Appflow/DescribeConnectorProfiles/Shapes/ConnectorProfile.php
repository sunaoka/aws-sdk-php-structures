<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectorProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $connectorProfileArn
 * @property string|null $connectorProfileName
 * @property 'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot'|null $connectorType
 * @property string|null $connectorLabel
 * @property 'Public'|'Private'|null $connectionMode
 * @property string|null $credentialsArn
 * @property ConnectorProfileProperties|null $connectorProfileProperties
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property PrivateConnectionProvisioningState|null $privateConnectionProvisioningState
 */
class ConnectorProfile extends Shape
{
    /**
     * @param array{
     *     connectorProfileArn?: string|null,
     *     connectorProfileName?: string|null,
     *     connectorType?: 'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot'|null,
     *     connectorLabel?: string|null,
     *     connectionMode?: 'Public'|'Private'|null,
     *     credentialsArn?: string|null,
     *     connectorProfileProperties?: ConnectorProfileProperties|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     privateConnectionProvisioningState?: PrivateConnectionProvisioningState|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
