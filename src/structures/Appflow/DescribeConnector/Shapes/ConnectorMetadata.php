<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmplitudeMetadata|null $Amplitude
 * @property DatadogMetadata|null $Datadog
 * @property DynatraceMetadata|null $Dynatrace
 * @property GoogleAnalyticsMetadata|null $GoogleAnalytics
 * @property InforNexusMetadata|null $InforNexus
 * @property MarketoMetadata|null $Marketo
 * @property RedshiftMetadata|null $Redshift
 * @property S3Metadata|null $S3
 * @property SalesforceMetadata|null $Salesforce
 * @property ServiceNowMetadata|null $ServiceNow
 * @property SingularMetadata|null $Singular
 * @property SlackMetadata|null $Slack
 * @property SnowflakeMetadata|null $Snowflake
 * @property TrendmicroMetadata|null $Trendmicro
 * @property VeevaMetadata|null $Veeva
 * @property ZendeskMetadata|null $Zendesk
 * @property EventBridgeMetadata|null $EventBridge
 * @property UpsolverMetadata|null $Upsolver
 * @property CustomerProfilesMetadata|null $CustomerProfiles
 * @property HoneycodeMetadata|null $Honeycode
 * @property SAPODataMetadata|null $SAPOData
 * @property PardotMetadata|null $Pardot
 */
class ConnectorMetadata extends Shape
{
    /**
     * @param array{
     *     Amplitude?: AmplitudeMetadata|null,
     *     Datadog?: DatadogMetadata|null,
     *     Dynatrace?: DynatraceMetadata|null,
     *     GoogleAnalytics?: GoogleAnalyticsMetadata|null,
     *     InforNexus?: InforNexusMetadata|null,
     *     Marketo?: MarketoMetadata|null,
     *     Redshift?: RedshiftMetadata|null,
     *     S3?: S3Metadata|null,
     *     Salesforce?: SalesforceMetadata|null,
     *     ServiceNow?: ServiceNowMetadata|null,
     *     Singular?: SingularMetadata|null,
     *     Slack?: SlackMetadata|null,
     *     Snowflake?: SnowflakeMetadata|null,
     *     Trendmicro?: TrendmicroMetadata|null,
     *     Veeva?: VeevaMetadata|null,
     *     Zendesk?: ZendeskMetadata|null,
     *     EventBridge?: EventBridgeMetadata|null,
     *     Upsolver?: UpsolverMetadata|null,
     *     CustomerProfiles?: CustomerProfilesMetadata|null,
     *     Honeycode?: HoneycodeMetadata|null,
     *     SAPOData?: SAPODataMetadata|null,
     *     Pardot?: PardotMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
