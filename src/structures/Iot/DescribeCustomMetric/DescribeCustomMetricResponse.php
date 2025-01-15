<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeCustomMetric;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $metricName
 * @property string|null $metricArn
 * @property 'string-list'|'ip-address-list'|'number-list'|'number'|null $metricType
 * @property string|null $displayName
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property \Aws\Api\DateTimeResult|null $lastModifiedDate
 */
class DescribeCustomMetricResponse extends Response
{
}
