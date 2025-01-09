<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectorProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmplitudeConnectorProfileProperties $Amplitude
 * @property DatadogConnectorProfileProperties $Datadog
 * @property DynatraceConnectorProfileProperties $Dynatrace
 * @property GoogleAnalyticsConnectorProfileProperties $GoogleAnalytics
 * @property HoneycodeConnectorProfileProperties $Honeycode
 * @property InforNexusConnectorProfileProperties $InforNexus
 * @property MarketoConnectorProfileProperties $Marketo
 * @property RedshiftConnectorProfileProperties $Redshift
 * @property SalesforceConnectorProfileProperties $Salesforce
 * @property ServiceNowConnectorProfileProperties $ServiceNow
 * @property SingularConnectorProfileProperties $Singular
 * @property SlackConnectorProfileProperties $Slack
 * @property SnowflakeConnectorProfileProperties $Snowflake
 * @property TrendmicroConnectorProfileProperties $Trendmicro
 * @property VeevaConnectorProfileProperties $Veeva
 * @property ZendeskConnectorProfileProperties $Zendesk
 * @property SAPODataConnectorProfileProperties $SAPOData
 * @property CustomConnectorProfileProperties $CustomConnector
 * @property PardotConnectorProfileProperties $Pardot
 */
class ConnectorProfileProperties extends Shape
{
    /**
     * @param array{
     *     Amplitude?: AmplitudeConnectorProfileProperties,
     *     Datadog?: DatadogConnectorProfileProperties,
     *     Dynatrace?: DynatraceConnectorProfileProperties,
     *     GoogleAnalytics?: GoogleAnalyticsConnectorProfileProperties,
     *     Honeycode?: HoneycodeConnectorProfileProperties,
     *     InforNexus?: InforNexusConnectorProfileProperties,
     *     Marketo?: MarketoConnectorProfileProperties,
     *     Redshift?: RedshiftConnectorProfileProperties,
     *     Salesforce?: SalesforceConnectorProfileProperties,
     *     ServiceNow?: ServiceNowConnectorProfileProperties,
     *     Singular?: SingularConnectorProfileProperties,
     *     Slack?: SlackConnectorProfileProperties,
     *     Snowflake?: SnowflakeConnectorProfileProperties,
     *     Trendmicro?: TrendmicroConnectorProfileProperties,
     *     Veeva?: VeevaConnectorProfileProperties,
     *     Zendesk?: ZendeskConnectorProfileProperties,
     *     SAPOData?: SAPODataConnectorProfileProperties,
     *     CustomConnector?: CustomConnectorProfileProperties,
     *     Pardot?: PardotConnectorProfileProperties
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
