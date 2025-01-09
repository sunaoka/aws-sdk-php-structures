<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateCustomMetric;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $metricName
 * @property string $metricArn
 * @property 'string-list'|'ip-address-list'|'number-list'|'number' $metricType
 * @property string $displayName
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $lastModifiedDate
 */
class UpdateCustomMetricResponse extends Response
{
}
