<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetApplicationDateRangeKpi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $KpiName
 * @property string $NextToken
 * @property string $PageSize
 * @property \Aws\Api\DateTimeResult $StartTime
 */
class GetApplicationDateRangeKpiRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     EndTime?: \Aws\Api\DateTimeResult,
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
