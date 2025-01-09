<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeFleetMetric;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $metricName
 * @property string $queryString
 * @property Shapes\AggregationType $aggregationType
 * @property int<60, 86400> $period
 * @property string $aggregationField
 * @property string $description
 * @property string $queryVersion
 * @property string $indexName
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property \Aws\Api\DateTimeResult $lastModifiedDate
 * @property 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None' $unit
 * @property int $version
 * @property string $metricArn
 */
class DescribeFleetMetricResponse extends Response
{
}
