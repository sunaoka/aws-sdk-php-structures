<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourneyDateRangeKpi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string $JourneyId
 * @property string $KpiName
 * @property string|null $NextToken
 * @property string|null $PageSize
 * @property \Aws\Api\DateTimeResult|null $StartTime
 */
class GetJourneyDateRangeKpiRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     JourneyId: string,
     *     KpiName: string,
     *     NextToken?: string|null,
     *     PageSize?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
