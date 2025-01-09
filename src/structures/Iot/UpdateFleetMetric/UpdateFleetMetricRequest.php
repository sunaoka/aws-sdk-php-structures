<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateFleetMetric;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $metricName
 * @property string $queryString
 * @property Shapes\AggregationType $aggregationType
 * @property int<60, 86400> $period
 * @property string $aggregationField
 * @property string $description
 * @property string $queryVersion
 * @property string $indexName
 * @property 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None' $unit
 * @property int $expectedVersion
 */
class UpdateFleetMetricRequest extends Request
{
    /**
     * @param array{
     *     metricName: string,
     *     queryString?: string,
     *     aggregationType?: Shapes\AggregationType,
     *     period?: int<60, 86400>,
     *     aggregationField?: string,
     *     description?: string,
     *     queryVersion?: string,
     *     indexName: string,
     *     unit?: 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None',
     *     expectedVersion?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
