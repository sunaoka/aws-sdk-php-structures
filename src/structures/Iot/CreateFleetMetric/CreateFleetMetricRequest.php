<?php

namespace Sunaoka\Aws\Structures\Iot\CreateFleetMetric;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $metricName
 * @property string $queryString
 * @property Shapes\AggregationType $aggregationType
 * @property int $period
 * @property string $aggregationField
 * @property string $description
 * @property string $queryVersion
 * @property string $indexName
 * @property 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None' $unit
 * @property list<Shapes\Tag> $tags
 */
class CreateFleetMetricRequest extends Request
{
    /**
     * @param array{
     *     metricName: string,
     *     queryString: string,
     *     aggregationType: Shapes\AggregationType,
     *     period: int,
     *     aggregationField: string,
     *     description?: string,
     *     queryVersion?: string,
     *     indexName?: string,
     *     unit?: 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None',
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
