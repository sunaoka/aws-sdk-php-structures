<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RedshiftDestinationProperties $Redshift
 * @property S3DestinationProperties $S3
 * @property SalesforceDestinationProperties $Salesforce
 * @property SnowflakeDestinationProperties $Snowflake
 * @property EventBridgeDestinationProperties $EventBridge
 * @property LookoutMetricsDestinationProperties $LookoutMetrics
 * @property UpsolverDestinationProperties $Upsolver
 * @property HoneycodeDestinationProperties $Honeycode
 * @property CustomerProfilesDestinationProperties $CustomerProfiles
 * @property ZendeskDestinationProperties $Zendesk
 * @property MarketoDestinationProperties $Marketo
 * @property CustomConnectorDestinationProperties $CustomConnector
 * @property SAPODataDestinationProperties $SAPOData
 */
class DestinationConnectorProperties extends Shape
{
    /**
     * @param array{
     *     Redshift?: RedshiftDestinationProperties,
     *     S3?: S3DestinationProperties,
     *     Salesforce?: SalesforceDestinationProperties,
     *     Snowflake?: SnowflakeDestinationProperties,
     *     EventBridge?: EventBridgeDestinationProperties,
     *     LookoutMetrics?: LookoutMetricsDestinationProperties,
     *     Upsolver?: UpsolverDestinationProperties,
     *     Honeycode?: HoneycodeDestinationProperties,
     *     CustomerProfiles?: CustomerProfilesDestinationProperties,
     *     Zendesk?: ZendeskDestinationProperties,
     *     Marketo?: MarketoDestinationProperties,
     *     CustomConnector?: CustomConnectorDestinationProperties,
     *     SAPOData?: SAPODataDestinationProperties
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
