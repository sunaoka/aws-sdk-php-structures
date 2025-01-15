<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmplitudeSourceProperties|null $Amplitude
 * @property DatadogSourceProperties|null $Datadog
 * @property DynatraceSourceProperties|null $Dynatrace
 * @property GoogleAnalyticsSourceProperties|null $GoogleAnalytics
 * @property InforNexusSourceProperties|null $InforNexus
 * @property MarketoSourceProperties|null $Marketo
 * @property S3SourceProperties|null $S3
 * @property SalesforceSourceProperties|null $Salesforce
 * @property ServiceNowSourceProperties|null $ServiceNow
 * @property SingularSourceProperties|null $Singular
 * @property SlackSourceProperties|null $Slack
 * @property TrendmicroSourceProperties|null $Trendmicro
 * @property VeevaSourceProperties|null $Veeva
 * @property ZendeskSourceProperties|null $Zendesk
 * @property SAPODataSourceProperties|null $SAPOData
 * @property CustomConnectorSourceProperties|null $CustomConnector
 * @property PardotSourceProperties|null $Pardot
 */
class SourceConnectorProperties extends Shape
{
    /**
     * @param array{
     *     Amplitude?: AmplitudeSourceProperties|null,
     *     Datadog?: DatadogSourceProperties|null,
     *     Dynatrace?: DynatraceSourceProperties|null,
     *     GoogleAnalytics?: GoogleAnalyticsSourceProperties|null,
     *     InforNexus?: InforNexusSourceProperties|null,
     *     Marketo?: MarketoSourceProperties|null,
     *     S3?: S3SourceProperties|null,
     *     Salesforce?: SalesforceSourceProperties|null,
     *     ServiceNow?: ServiceNowSourceProperties|null,
     *     Singular?: SingularSourceProperties|null,
     *     Slack?: SlackSourceProperties|null,
     *     Trendmicro?: TrendmicroSourceProperties|null,
     *     Veeva?: VeevaSourceProperties|null,
     *     Zendesk?: ZendeskSourceProperties|null,
     *     SAPOData?: SAPODataSourceProperties|null,
     *     CustomConnector?: CustomConnectorSourceProperties|null,
     *     Pardot?: PardotSourceProperties|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
