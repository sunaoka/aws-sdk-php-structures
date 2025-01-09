<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmplitudeMetadata $Amplitude
 * @property DatadogMetadata $Datadog
 * @property DynatraceMetadata $Dynatrace
 * @property GoogleAnalyticsMetadata $GoogleAnalytics
 * @property InforNexusMetadata $InforNexus
 * @property MarketoMetadata $Marketo
 * @property RedshiftMetadata $Redshift
 * @property S3Metadata $S3
 * @property SalesforceMetadata $Salesforce
 * @property ServiceNowMetadata $ServiceNow
 * @property SingularMetadata $Singular
 * @property SlackMetadata $Slack
 * @property SnowflakeMetadata $Snowflake
 * @property TrendmicroMetadata $Trendmicro
 * @property VeevaMetadata $Veeva
 * @property ZendeskMetadata $Zendesk
 * @property EventBridgeMetadata $EventBridge
 * @property UpsolverMetadata $Upsolver
 * @property CustomerProfilesMetadata $CustomerProfiles
 * @property HoneycodeMetadata $Honeycode
 * @property SAPODataMetadata $SAPOData
 * @property PardotMetadata $Pardot
 */
class ConnectorMetadata extends Shape
{
    /**
     * @param array{
     *     Amplitude?: AmplitudeMetadata,
     *     Datadog?: DatadogMetadata,
     *     Dynatrace?: DynatraceMetadata,
     *     GoogleAnalytics?: GoogleAnalyticsMetadata,
     *     InforNexus?: InforNexusMetadata,
     *     Marketo?: MarketoMetadata,
     *     Redshift?: RedshiftMetadata,
     *     S3?: S3Metadata,
     *     Salesforce?: SalesforceMetadata,
     *     ServiceNow?: ServiceNowMetadata,
     *     Singular?: SingularMetadata,
     *     Slack?: SlackMetadata,
     *     Snowflake?: SnowflakeMetadata,
     *     Trendmicro?: TrendmicroMetadata,
     *     Veeva?: VeevaMetadata,
     *     Zendesk?: ZendeskMetadata,
     *     EventBridge?: EventBridgeMetadata,
     *     Upsolver?: UpsolverMetadata,
     *     CustomerProfiles?: CustomerProfilesMetadata,
     *     Honeycode?: HoneycodeMetadata,
     *     SAPOData?: SAPODataMetadata,
     *     Pardot?: PardotMetadata
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
