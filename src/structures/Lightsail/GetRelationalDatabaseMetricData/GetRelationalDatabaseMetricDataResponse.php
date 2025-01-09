<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabaseMetricData;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CPUUtilization'|'DatabaseConnections'|'DiskQueueDepth'|'FreeStorageSpace'|'NetworkReceiveThroughput'|'NetworkTransmitThroughput' $metricName
 * @property list<Shapes\MetricDatapoint> $metricData
 */
class GetRelationalDatabaseMetricDataResponse extends Response
{
}
