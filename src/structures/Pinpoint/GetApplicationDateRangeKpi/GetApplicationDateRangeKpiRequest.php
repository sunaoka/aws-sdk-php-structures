<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetApplicationDateRangeKpi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string $KpiName
 * @property string|null $NextToken
 * @property string|null $PageSize
 * @property \Aws\Api\DateTimeResult|null $StartTime
 */
class GetApplicationDateRangeKpiRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
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
