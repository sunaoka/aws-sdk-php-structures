<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetContainerServiceMetricData;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CPUUtilization'|'MemoryUtilization'|null $metricName
 * @property list<Shapes\MetricDatapoint>|null $metricData
 */
class GetContainerServiceMetricDataResponse extends Response
{
}
