<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDistributionMetricData;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Requests'|'BytesDownloaded'|'BytesUploaded'|'TotalErrorRate'|'Http4xxErrorRate'|'Http5xxErrorRate' $metricName
 * @property list<Shapes\MetricDatapoint> $metricData
 */
class GetDistributionMetricDataResponse extends Response
{
}
