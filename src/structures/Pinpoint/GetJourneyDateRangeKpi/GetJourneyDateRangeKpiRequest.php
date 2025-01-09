<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourneyDateRangeKpi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $JourneyId
 * @property string $KpiName
 * @property string $NextToken
 * @property string $PageSize
 * @property \Aws\Api\DateTimeResult $StartTime
 */
class GetJourneyDateRangeKpiRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     JourneyId: string,
     *     KpiName: string,
     *     NextToken?: string,
     *     PageSize?: string,
     *     StartTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
