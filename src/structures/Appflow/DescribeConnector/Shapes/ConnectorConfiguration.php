<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $canUseAsSource
 * @property bool|null $canUseAsDestination
 * @property list<'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot'>|null $supportedDestinationConnectors
 * @property list<'BYMINUTE'|'HOURLY'|'DAILY'|'WEEKLY'|'MONTHLY'|'ONCE'>|null $supportedSchedulingFrequencies
 * @property bool|null $isPrivateLinkEnabled
 * @property bool|null $isPrivateLinkEndpointUrlRequired
 * @property list<'Scheduled'|'Event'|'OnDemand'>|null $supportedTriggerTypes
 * @property ConnectorMetadata|null $connectorMetadata
 * @property 'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot'|null $connectorType
 * @property string|null $connectorLabel
 * @property string|null $connectorDescription
 * @property string|null $connectorOwner
 * @property string|null $connectorName
 * @property string|null $connectorVersion
 * @property string|null $connectorArn
 * @property list<string>|null $connectorModes
 * @property AuthenticationConfig|null $authenticationConfig
 * @property list<ConnectorRuntimeSetting>|null $connectorRuntimeSettings
 * @property list<string>|null $supportedApiVersions
 * @property list<'PROJECTION'|'LESS_THAN'|'GREATER_THAN'|'CONTAINS'|'BETWEEN'|'LESS_THAN_OR_EQUAL_TO'|'GREATER_THAN_OR_EQUAL_TO'|'EQUAL_TO'|'NOT_EQUAL_TO'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP'>|null $supportedOperators
 * @property list<'INSERT'|'UPSERT'|'UPDATE'|'DELETE'>|null $supportedWriteOperations
 * @property 'LAMBDA'|null $connectorProvisioningType
 * @property ConnectorProvisioningConfig|null $connectorProvisioningConfig
 * @property string|null $logoURL
 * @property \Aws\Api\DateTimeResult|null $registeredAt
 * @property string|null $registeredBy
 * @property list<'RECORD'|'FILE'>|null $supportedDataTransferTypes
 * @property list<DataTransferApi>|null $supportedDataTransferApis
 */
class ConnectorConfiguration extends Shape
{
    /**
     * @param array{
     *     canUseAsSource?: bool|null,
     *     canUseAsDestination?: bool|null,
     *     supportedDestinationConnectors?: list<'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot'>|null,
     *     supportedSchedulingFrequencies?: list<'BYMINUTE'|'HOURLY'|'DAILY'|'WEEKLY'|'MONTHLY'|'ONCE'>|null,
     *     isPrivateLinkEnabled?: bool|null,
     *     isPrivateLinkEndpointUrlRequired?: bool|null,
     *     supportedTriggerTypes?: list<'Scheduled'|'Event'|'OnDemand'>|null,
     *     connectorMetadata?: ConnectorMetadata|null,
     *     connectorType?: 'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot'|null,
     *     connectorLabel?: string|null,
     *     connectorDescription?: string|null,
     *     connectorOwner?: string|null,
     *     connectorName?: string|null,
     *     connectorVersion?: string|null,
     *     connectorArn?: string|null,
     *     connectorModes?: list<string>|null,
     *     authenticationConfig?: AuthenticationConfig|null,
     *     connectorRuntimeSettings?: list<ConnectorRuntimeSetting>|null,
     *     supportedApiVersions?: list<string>|null,
     *     supportedOperators?: list<'PROJECTION'|'LESS_THAN'|'GREATER_THAN'|'CONTAINS'|'BETWEEN'|'LESS_THAN_OR_EQUAL_TO'|'GREATER_THAN_OR_EQUAL_TO'|'EQUAL_TO'|'NOT_EQUAL_TO'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP'>|null,
     *     supportedWriteOperations?: list<'INSERT'|'UPSERT'|'UPDATE'|'DELETE'>|null,
     *     connectorProvisioningType?: 'LAMBDA'|null,
     *     connectorProvisioningConfig?: ConnectorProvisioningConfig|null,
     *     logoURL?: string|null,
     *     registeredAt?: \Aws\Api\DateTimeResult|null,
     *     registeredBy?: string|null,
     *     supportedDataTransferTypes?: list<'RECORD'|'FILE'>|null,
     *     supportedDataTransferApis?: list<DataTransferApi>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
