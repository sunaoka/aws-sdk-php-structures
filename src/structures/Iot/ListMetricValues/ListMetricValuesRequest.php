<?php

namespace Sunaoka\Aws\Structures\Iot\ListMetricValues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 * @property string $metricName
 * @property string|null $dimensionName
 * @property 'IN'|'NOT_IN'|null $dimensionValueOperator
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property int<1, 250>|null $maxResults
 * @property string|null $nextToken
 */
class ListMetricValuesRequest extends Request
{
    /**
     * @param array{
     *     thingName: string,
     *     metricName: string,
     *     dimensionName?: string|null,
     *     dimensionValueOperator?: 'IN'|'NOT_IN'|null,
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult,
     *     maxResults?: int<1, 250>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
