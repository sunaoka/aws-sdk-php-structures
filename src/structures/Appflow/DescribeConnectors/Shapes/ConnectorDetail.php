<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $connectorDescription
 * @property string $connectorName
 * @property string $connectorOwner
 * @property string $connectorVersion
 * @property string $applicationType
 * @property 'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot' $connectorType
 * @property string $connectorLabel
 * @property \Aws\Api\DateTimeResult $registeredAt
 * @property string $registeredBy
 * @property 'LAMBDA' $connectorProvisioningType
 * @property list<string> $connectorModes
 * @property list<'RECORD'|'FILE'> $supportedDataTransferTypes
 */
class ConnectorDetail extends Shape
{
    /**
     * @param array{
     *     connectorDescription?: string,
     *     connectorName?: string,
     *     connectorOwner?: string,
     *     connectorVersion?: string,
     *     applicationType?: string,
     *     connectorType?: 'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot',
     *     connectorLabel?: string,
     *     registeredAt?: \Aws\Api\DateTimeResult,
     *     registeredBy?: string,
     *     connectorProvisioningType?: 'LAMBDA',
     *     connectorModes?: list<string>,
     *     supportedDataTransferTypes?: list<'RECORD'|'FILE'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
