<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstanceMetricData;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CPUUtilization'|'NetworkIn'|'NetworkOut'|'StatusCheckFailed'|'StatusCheckFailed_Instance'|'StatusCheckFailed_System'|'BurstCapacityTime'|'BurstCapacityPercentage'|'MetadataNoToken'|'DiskReadOps'|'DiskWriteOps'|'DiskReadBytes'|'DiskWriteBytes'|'DiskTotalReadTime'|'DiskTotalWriteTime'|'DiskQueueLength'|null $metricName
 * @property list<Shapes\MetricDatapoint>|null $metricData
 */
class GetInstanceMetricDataResponse extends Response
{
}
