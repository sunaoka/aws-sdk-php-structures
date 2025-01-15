<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeFleetMetric;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $metricName
 * @property string|null $queryString
 * @property Shapes\AggregationType|null $aggregationType
 * @property int<60, 86400>|null $period
 * @property string|null $aggregationField
 * @property string|null $description
 * @property string|null $queryVersion
 * @property string|null $indexName
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property \Aws\Api\DateTimeResult|null $lastModifiedDate
 * @property 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None'|null $unit
 * @property int|null $version
 * @property string|null $metricArn
 */
class DescribeFleetMetricResponse extends Response
{
}
