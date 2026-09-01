<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseMetricData;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CPUUtilization'|'DatabaseConnections'|'DiskQueueDepth'|'FreeStorageSpace'|'NetworkReceiveThroughput'|'NetworkTransmitThroughput'|'FreeableMemory'|'SwapUsage'|null $metricName
 * @property list<Shapes\MetricDatapoint>|null $metricData
 */
class GetRelationalDatabaseMetricDataResponse extends Response
{
}
