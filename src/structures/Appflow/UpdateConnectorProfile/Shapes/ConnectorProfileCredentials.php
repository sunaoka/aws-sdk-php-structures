<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmplitudeConnectorProfileCredentials $Amplitude
 * @property DatadogConnectorProfileCredentials $Datadog
 * @property DynatraceConnectorProfileCredentials $Dynatrace
 * @property GoogleAnalyticsConnectorProfileCredentials $GoogleAnalytics
 * @property HoneycodeConnectorProfileCredentials $Honeycode
 * @property InforNexusConnectorProfileCredentials $InforNexus
 * @property MarketoConnectorProfileCredentials $Marketo
 * @property RedshiftConnectorProfileCredentials $Redshift
 * @property SalesforceConnectorProfileCredentials $Salesforce
 * @property ServiceNowConnectorProfileCredentials $ServiceNow
 * @property SingularConnectorProfileCredentials $Singular
 * @property SlackConnectorProfileCredentials $Slack
 * @property SnowflakeConnectorProfileCredentials $Snowflake
 * @property TrendmicroConnectorProfileCredentials $Trendmicro
 * @property VeevaConnectorProfileCredentials $Veeva
 * @property ZendeskConnectorProfileCredentials $Zendesk
 * @property SAPODataConnectorProfileCredentials $SAPOData
 * @property CustomConnectorProfileCredentials $CustomConnector
 * @property PardotConnectorProfileCredentials $Pardot
 */
class ConnectorProfileCredentials extends Shape
{
    /**
     * @param array{
     *     Amplitude?: AmplitudeConnectorProfileCredentials,
     *     Datadog?: DatadogConnectorProfileCredentials,
     *     Dynatrace?: DynatraceConnectorProfileCredentials,
     *     GoogleAnalytics?: GoogleAnalyticsConnectorProfileCredentials,
     *     Honeycode?: HoneycodeConnectorProfileCredentials,
     *     InforNexus?: InforNexusConnectorProfileCredentials,
     *     Marketo?: MarketoConnectorProfileCredentials,
     *     Redshift?: RedshiftConnectorProfileCredentials,
     *     Salesforce?: SalesforceConnectorProfileCredentials,
     *     ServiceNow?: ServiceNowConnectorProfileCredentials,
     *     Singular?: SingularConnectorProfileCredentials,
     *     Slack?: SlackConnectorProfileCredentials,
     *     Snowflake?: SnowflakeConnectorProfileCredentials,
     *     Trendmicro?: TrendmicroConnectorProfileCredentials,
     *     Veeva?: VeevaConnectorProfileCredentials,
     *     Zendesk?: ZendeskConnectorProfileCredentials,
     *     SAPOData?: SAPODataConnectorProfileCredentials,
     *     CustomConnector?: CustomConnectorProfileCredentials,
     *     Pardot?: PardotConnectorProfileCredentials
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
