<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBucketMetricData;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'BucketSizeBytes'|'NumberOfObjects'|null $metricName
 * @property list<Shapes\MetricDatapoint>|null $metricData
 */
class GetBucketMetricDataResponse extends Response
{
}
