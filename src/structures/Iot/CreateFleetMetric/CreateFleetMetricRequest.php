<?php

namespace Sunaoka\Aws\Structures\Iot\CreateFleetMetric;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $metricName
 * @property string $queryString
 * @property Shapes\AggregationType $aggregationType
 * @property int<60, 86400> $period
 * @property string $aggregationField
 * @property string|null $description
 * @property string|null $queryVersion
 * @property string|null $indexName
 * @property 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None'|null $unit
 * @property list<Shapes\Tag>|null $tags
 */
class CreateFleetMetricRequest extends Request
{
    /**
     * @param array{
     *     metricName: string,
     *     queryString: string,
     *     aggregationType: Shapes\AggregationType,
     *     period: int<60, 86400>,
     *     aggregationField: string,
     *     description?: string|null,
     *     queryVersion?: string|null,
     *     indexName?: string|null,
     *     unit?: 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None'|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
