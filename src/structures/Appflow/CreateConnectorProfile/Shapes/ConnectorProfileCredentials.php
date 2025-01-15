<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmplitudeConnectorProfileCredentials|null $Amplitude
 * @property DatadogConnectorProfileCredentials|null $Datadog
 * @property DynatraceConnectorProfileCredentials|null $Dynatrace
 * @property GoogleAnalyticsConnectorProfileCredentials|null $GoogleAnalytics
 * @property HoneycodeConnectorProfileCredentials|null $Honeycode
 * @property InforNexusConnectorProfileCredentials|null $InforNexus
 * @property MarketoConnectorProfileCredentials|null $Marketo
 * @property RedshiftConnectorProfileCredentials|null $Redshift
 * @property SalesforceConnectorProfileCredentials|null $Salesforce
 * @property ServiceNowConnectorProfileCredentials|null $ServiceNow
 * @property SingularConnectorProfileCredentials|null $Singular
 * @property SlackConnectorProfileCredentials|null $Slack
 * @property SnowflakeConnectorProfileCredentials|null $Snowflake
 * @property TrendmicroConnectorProfileCredentials|null $Trendmicro
 * @property VeevaConnectorProfileCredentials|null $Veeva
 * @property ZendeskConnectorProfileCredentials|null $Zendesk
 * @property SAPODataConnectorProfileCredentials|null $SAPOData
 * @property CustomConnectorProfileCredentials|null $CustomConnector
 * @property PardotConnectorProfileCredentials|null $Pardot
 */
class ConnectorProfileCredentials extends Shape
{
    /**
     * @param array{
     *     Amplitude?: AmplitudeConnectorProfileCredentials|null,
     *     Datadog?: DatadogConnectorProfileCredentials|null,
     *     Dynatrace?: DynatraceConnectorProfileCredentials|null,
     *     GoogleAnalytics?: GoogleAnalyticsConnectorProfileCredentials|null,
     *     Honeycode?: HoneycodeConnectorProfileCredentials|null,
     *     InforNexus?: InforNexusConnectorProfileCredentials|null,
     *     Marketo?: MarketoConnectorProfileCredentials|null,
     *     Redshift?: RedshiftConnectorProfileCredentials|null,
     *     Salesforce?: SalesforceConnectorProfileCredentials|null,
     *     ServiceNow?: ServiceNowConnectorProfileCredentials|null,
     *     Singular?: SingularConnectorProfileCredentials|null,
     *     Slack?: SlackConnectorProfileCredentials|null,
     *     Snowflake?: SnowflakeConnectorProfileCredentials|null,
     *     Trendmicro?: TrendmicroConnectorProfileCredentials|null,
     *     Veeva?: VeevaConnectorProfileCredentials|null,
     *     Zendesk?: ZendeskConnectorProfileCredentials|null,
     *     SAPOData?: SAPODataConnectorProfileCredentials|null,
     *     CustomConnector?: CustomConnectorProfileCredentials|null,
     *     Pardot?: PardotConnectorProfileCredentials|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
