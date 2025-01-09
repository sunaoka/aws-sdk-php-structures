<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBucketMetricData;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'BucketSizeBytes'|'NumberOfObjects' $metricName
 * @property list<Shapes\MetricDatapoint> $metricData
 */
class GetBucketMetricDataResponse extends Response
{
}
