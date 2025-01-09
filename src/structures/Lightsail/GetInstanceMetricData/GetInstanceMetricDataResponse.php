<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstanceMetricData;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CPUUtilization'|'NetworkIn'|'NetworkOut'|'StatusCheckFailed'|'StatusCheckFailed_Instance'|'StatusCheckFailed_System'|'BurstCapacityTime'|'BurstCapacityPercentage'|'MetadataNoToken' $metricName
 * @property list<Shapes\MetricDatapoint> $metricData
 */
class GetInstanceMetricDataResponse extends Response
{
}
