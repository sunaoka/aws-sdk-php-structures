<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmplitudeConnectorProfileProperties|null $Amplitude
 * @property DatadogConnectorProfileProperties|null $Datadog
 * @property DynatraceConnectorProfileProperties|null $Dynatrace
 * @property GoogleAnalyticsConnectorProfileProperties|null $GoogleAnalytics
 * @property HoneycodeConnectorProfileProperties|null $Honeycode
 * @property InforNexusConnectorProfileProperties|null $InforNexus
 * @property MarketoConnectorProfileProperties|null $Marketo
 * @property RedshiftConnectorProfileProperties|null $Redshift
 * @property SalesforceConnectorProfileProperties|null $Salesforce
 * @property ServiceNowConnectorProfileProperties|null $ServiceNow
 * @property SingularConnectorProfileProperties|null $Singular
 * @property SlackConnectorProfileProperties|null $Slack
 * @property SnowflakeConnectorProfileProperties|null $Snowflake
 * @property TrendmicroConnectorProfileProperties|null $Trendmicro
 * @property VeevaConnectorProfileProperties|null $Veeva
 * @property ZendeskConnectorProfileProperties|null $Zendesk
 * @property SAPODataConnectorProfileProperties|null $SAPOData
 * @property CustomConnectorProfileProperties|null $CustomConnector
 * @property PardotConnectorProfileProperties|null $Pardot
 */
class ConnectorProfileProperties extends Shape
{
    /**
     * @param array{
     *     Amplitude?: AmplitudeConnectorProfileProperties|null,
     *     Datadog?: DatadogConnectorProfileProperties|null,
     *     Dynatrace?: DynatraceConnectorProfileProperties|null,
     *     GoogleAnalytics?: GoogleAnalyticsConnectorProfileProperties|null,
     *     Honeycode?: HoneycodeConnectorProfileProperties|null,
     *     InforNexus?: InforNexusConnectorProfileProperties|null,
     *     Marketo?: MarketoConnectorProfileProperties|null,
     *     Redshift?: RedshiftConnectorProfileProperties|null,
     *     Salesforce?: SalesforceConnectorProfileProperties|null,
     *     ServiceNow?: ServiceNowConnectorProfileProperties|null,
     *     Singular?: SingularConnectorProfileProperties|null,
     *     Slack?: SlackConnectorProfileProperties|null,
     *     Snowflake?: SnowflakeConnectorProfileProperties|null,
     *     Trendmicro?: TrendmicroConnectorProfileProperties|null,
     *     Veeva?: VeevaConnectorProfileProperties|null,
     *     Zendesk?: ZendeskConnectorProfileProperties|null,
     *     SAPOData?: SAPODataConnectorProfileProperties|null,
     *     CustomConnector?: CustomConnectorProfileProperties|null,
     *     Pardot?: PardotConnectorProfileProperties|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
