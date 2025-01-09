<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $canUseAsSource
 * @property bool $canUseAsDestination
 * @property list<'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot'> $supportedDestinationConnectors
 * @property list<'BYMINUTE'|'HOURLY'|'DAILY'|'WEEKLY'|'MONTHLY'|'ONCE'> $supportedSchedulingFrequencies
 * @property bool $isPrivateLinkEnabled
 * @property bool $isPrivateLinkEndpointUrlRequired
 * @property list<'Scheduled'|'Event'|'OnDemand'> $supportedTriggerTypes
 * @property ConnectorMetadata $connectorMetadata
 * @property 'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot' $connectorType
 * @property string $connectorLabel
 * @property string $connectorDescription
 * @property string $connectorOwner
 * @property string $connectorName
 * @property string $connectorVersion
 * @property string $connectorArn
 * @property list<string> $connectorModes
 * @property AuthenticationConfig $authenticationConfig
 * @property list<ConnectorRuntimeSetting> $connectorRuntimeSettings
 * @property list<string> $supportedApiVersions
 * @property list<'PROJECTION'|'LESS_THAN'|'GREATER_THAN'|'CONTAINS'|'BETWEEN'|'LESS_THAN_OR_EQUAL_TO'|'GREATER_THAN_OR_EQUAL_TO'|'EQUAL_TO'|'NOT_EQUAL_TO'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP'> $supportedOperators
 * @property list<'INSERT'|'UPSERT'|'UPDATE'|'DELETE'> $supportedWriteOperations
 * @property 'LAMBDA' $connectorProvisioningType
 * @property ConnectorProvisioningConfig $connectorProvisioningConfig
 * @property string $logoURL
 * @property \Aws\Api\DateTimeResult $registeredAt
 * @property string $registeredBy
 * @property list<'RECORD'|'FILE'> $supportedDataTransferTypes
 * @property list<DataTransferApi> $supportedDataTransferApis
 */
class ConnectorConfiguration extends Shape
{
    /**
     * @param array{
     *     canUseAsSource?: bool,
     *     canUseAsDestination?: bool,
     *     supportedDestinationConnectors?: list<'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot'>,
     *     supportedSchedulingFrequencies?: list<'BYMINUTE'|'HOURLY'|'DAILY'|'WEEKLY'|'MONTHLY'|'ONCE'>,
     *     isPrivateLinkEnabled?: bool,
     *     isPrivateLinkEndpointUrlRequired?: bool,
     *     supportedTriggerTypes?: list<'Scheduled'|'Event'|'OnDemand'>,
     *     connectorMetadata?: ConnectorMetadata,
     *     connectorType?: 'Salesforce'|'Singular'|'Slack'|'Redshift'|'S3'|'Marketo'|'Googleanalytics'|'Zendesk'|'Servicenow'|'Datadog'|'Trendmicro'|'Snowflake'|'Dynatrace'|'Infornexus'|'Amplitude'|'Veeva'|'EventBridge'|'LookoutMetrics'|'Upsolver'|'Honeycode'|'CustomerProfiles'|'SAPOData'|'CustomConnector'|'Pardot',
     *     connectorLabel?: string,
     *     connectorDescription?: string,
     *     connectorOwner?: string,
     *     connectorName?: string,
     *     connectorVersion?: string,
     *     connectorArn?: string,
     *     connectorModes?: list<string>,
     *     authenticationConfig?: AuthenticationConfig,
     *     connectorRuntimeSettings?: list<ConnectorRuntimeSetting>,
     *     supportedApiVersions?: list<string>,
     *     supportedOperators?: list<'PROJECTION'|'LESS_THAN'|'GREATER_THAN'|'CONTAINS'|'BETWEEN'|'LESS_THAN_OR_EQUAL_TO'|'GREATER_THAN_OR_EQUAL_TO'|'EQUAL_TO'|'NOT_EQUAL_TO'|'ADDITION'|'MULTIPLICATION'|'DIVISION'|'SUBTRACTION'|'MASK_ALL'|'MASK_FIRST_N'|'MASK_LAST_N'|'VALIDATE_NON_NULL'|'VALIDATE_NON_ZERO'|'VALIDATE_NON_NEGATIVE'|'VALIDATE_NUMERIC'|'NO_OP'>,
     *     supportedWriteOperations?: list<'INSERT'|'UPSERT'|'UPDATE'|'DELETE'>,
     *     connectorProvisioningType?: 'LAMBDA',
     *     connectorProvisioningConfig?: ConnectorProvisioningConfig,
     *     logoURL?: string,
     *     registeredAt?: \Aws\Api\DateTimeResult,
     *     registeredBy?: string,
     *     supportedDataTransferTypes?: list<'RECORD'|'FILE'>,
     *     supportedDataTransferApis?: list<DataTransferApi>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
