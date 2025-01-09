<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetContainerServiceMetricData;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CPUUtilization'|'MemoryUtilization' $metricName
 * @property list<Shapes\MetricDatapoint> $metricData
 */
class GetContainerServiceMetricDataResponse extends Response
{
}
