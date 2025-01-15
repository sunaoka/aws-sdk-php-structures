<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstanceMetricData;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CPUUtilization'|'NetworkIn'|'NetworkOut'|'StatusCheckFailed'|'StatusCheckFailed_Instance'|'StatusCheckFailed_System'|'BurstCapacityTime'|'BurstCapacityPercentage'|'MetadataNoToken'|null $metricName
 * @property list<Shapes\MetricDatapoint>|null $metricData
 */
class GetInstanceMetricDataResponse extends Response
{
}
