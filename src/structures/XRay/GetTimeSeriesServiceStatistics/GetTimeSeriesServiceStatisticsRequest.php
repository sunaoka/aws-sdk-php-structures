<?php

namespace Sunaoka\Aws\Structures\XRay\GetTimeSeriesServiceStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $GroupName
 * @property string $GroupARN
 * @property string $EntitySelectorExpression
 * @property int $Period
 * @property bool $ForecastStatistics
 * @property string $NextToken
 */
class GetTimeSeriesServiceStatisticsRequest extends Request
{
    /**
     * @param array{
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     GroupName?: string,
     *     GroupARN?: string,
     *     EntitySelectorExpression?: string,
     *     Period?: int,
     *     ForecastStatistics?: bool,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
