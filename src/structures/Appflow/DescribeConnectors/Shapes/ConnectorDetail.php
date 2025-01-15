<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $connectorDescription
 * @property string|null $connectorName
 * @property string|null $connectorOwner
 * @property string|null $connectorVersion
 * @property string|null $applicationType
 * @property 'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot'|null $connectorType
 * @property string|null $connectorLabel
 * @property \Aws\Api\DateTimeResult|null $registeredAt
 * @property string|null $registeredBy
 * @property 'LAMBDA'|null $connectorProvisioningType
 * @property list<string>|null $connectorModes
 * @property list<'RECORD'|'FILE'>|null $supportedDataTransferTypes
 */
class ConnectorDetail extends Shape
{
    /**
     * @param array{
     *     connectorDescription?: string|null,
     *     connectorName?: string|null,
     *     connectorOwner?: string|null,
     *     connectorVersion?: string|null,
     *     applicationType?: string|null,
     *     connectorType?: 'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot'|null,
     *     connectorLabel?: string|null,
     *     registeredAt?: \Aws\Api\DateTimeResult|null,
     *     registeredBy?: string|null,
     *     connectorProvisioningType?: 'LAMBDA'|null,
     *     connectorModes?: list<string>|null,
     *     supportedDataTransferTypes?: list<'RECORD'|'FILE'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
