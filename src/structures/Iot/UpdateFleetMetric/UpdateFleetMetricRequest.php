<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateFleetMetric;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $metricName
 * @property string|null $queryString
 * @property Shapes\AggregationType|null $aggregationType
 * @property int<60, 86400>|null $period
 * @property string|null $aggregationField
 * @property string|null $description
 * @property string|null $queryVersion
 * @property string $indexName
 * @property 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None'|null $unit
 * @property int|null $expectedVersion
 */
class UpdateFleetMetricRequest extends Request
{
    /**
     * @param array{
     *     metricName: string,
     *     queryString?: string|null,
     *     aggregationType?: Shapes\AggregationType|null,
     *     period?: int<60, 86400>|null,
     *     aggregationField?: string|null,
     *     description?: string|null,
     *     queryVersion?: string|null,
     *     indexName: string,
     *     unit?: 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None'|null,
     *     expectedVersion?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
