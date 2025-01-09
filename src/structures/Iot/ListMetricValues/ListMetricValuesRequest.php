<?php

namespace Sunaoka\Aws\Structures\Iot\ListMetricValues;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 * @property string $metricName
 * @property string $dimensionName
 * @property 'IN'|'NOT_IN' $dimensionValueOperator
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property int $maxResults
 * @property string $nextToken
 */
class ListMetricValuesRequest extends Request
{
    /**
     * @param array{
     *     thingName: string,
     *     metricName: string,
     *     dimensionName?: string,
     *     dimensionValueOperator?: 'IN'|'NOT_IN',
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
