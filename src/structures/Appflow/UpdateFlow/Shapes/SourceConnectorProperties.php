<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmplitudeSourceProperties $Amplitude
 * @property DatadogSourceProperties $Datadog
 * @property DynatraceSourceProperties $Dynatrace
 * @property GoogleAnalyticsSourceProperties $GoogleAnalytics
 * @property InforNexusSourceProperties $InforNexus
 * @property MarketoSourceProperties $Marketo
 * @property S3SourceProperties $S3
 * @property SalesforceSourceProperties $Salesforce
 * @property ServiceNowSourceProperties $ServiceNow
 * @property SingularSourceProperties $Singular
 * @property SlackSourceProperties $Slack
 * @property TrendmicroSourceProperties $Trendmicro
 * @property VeevaSourceProperties $Veeva
 * @property ZendeskSourceProperties $Zendesk
 * @property SAPODataSourceProperties $SAPOData
 * @property CustomConnectorSourceProperties $CustomConnector
 * @property PardotSourceProperties $Pardot
 */
class SourceConnectorProperties extends Shape
{
    /**
     * @param array{
     *     Amplitude?: AmplitudeSourceProperties,
     *     Datadog?: DatadogSourceProperties,
     *     Dynatrace?: DynatraceSourceProperties,
     *     GoogleAnalytics?: GoogleAnalyticsSourceProperties,
     *     InforNexus?: InforNexusSourceProperties,
     *     Marketo?: MarketoSourceProperties,
     *     S3?: S3SourceProperties,
     *     Salesforce?: SalesforceSourceProperties,
     *     ServiceNow?: ServiceNowSourceProperties,
     *     Singular?: SingularSourceProperties,
     *     Slack?: SlackSourceProperties,
     *     Trendmicro?: TrendmicroSourceProperties,
     *     Veeva?: VeevaSourceProperties,
     *     Zendesk?: ZendeskSourceProperties,
     *     SAPOData?: SAPODataSourceProperties,
     *     CustomConnector?: CustomConnectorSourceProperties,
     *     Pardot?: PardotSourceProperties
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
