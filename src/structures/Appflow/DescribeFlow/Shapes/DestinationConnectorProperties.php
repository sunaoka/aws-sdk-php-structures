<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RedshiftDestinationProperties|null $Redshift
 * @property S3DestinationProperties|null $S3
 * @property SalesforceDestinationProperties|null $Salesforce
 * @property SnowflakeDestinationProperties|null $Snowflake
 * @property EventBridgeDestinationProperties|null $EventBridge
 * @property LookoutMetricsDestinationProperties|null $LookoutMetrics
 * @property UpsolverDestinationProperties|null $Upsolver
 * @property HoneycodeDestinationProperties|null $Honeycode
 * @property CustomerProfilesDestinationProperties|null $CustomerProfiles
 * @property ZendeskDestinationProperties|null $Zendesk
 * @property MarketoDestinationProperties|null $Marketo
 * @property CustomConnectorDestinationProperties|null $CustomConnector
 * @property SAPODataDestinationProperties|null $SAPOData
 */
class DestinationConnectorProperties extends Shape
{
    /**
     * @param array{
     *     Redshift?: RedshiftDestinationProperties|null,
     *     S3?: S3DestinationProperties|null,
     *     Salesforce?: SalesforceDestinationProperties|null,
     *     Snowflake?: SnowflakeDestinationProperties|null,
     *     EventBridge?: EventBridgeDestinationProperties|null,
     *     LookoutMetrics?: LookoutMetricsDestinationProperties|null,
     *     Upsolver?: UpsolverDestinationProperties|null,
     *     Honeycode?: HoneycodeDestinationProperties|null,
     *     CustomerProfiles?: CustomerProfilesDestinationProperties|null,
     *     Zendesk?: ZendeskDestinationProperties|null,
     *     Marketo?: MarketoDestinationProperties|null,
     *     CustomConnector?: CustomConnectorDestinationProperties|null,
     *     SAPOData?: SAPODataDestinationProperties|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
