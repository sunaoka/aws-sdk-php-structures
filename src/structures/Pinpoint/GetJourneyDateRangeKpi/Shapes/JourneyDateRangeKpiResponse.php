<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourneyDateRangeKpi\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $JourneyId
 * @property string $KpiName
 * @property BaseKpiResult $KpiResult
 * @property string|null $NextToken
 * @property \Aws\Api\DateTimeResult $StartTime
 */
class JourneyDateRangeKpiResponse extends Shape
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     JourneyId: string,
     *     KpiName: string,
     *     KpiResult: BaseKpiResult,
     *     NextToken?: string|null,
     *     StartTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
