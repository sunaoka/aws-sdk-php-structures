<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaignDateRangeKpi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $CampaignId
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $KpiName
 * @property string $NextToken
 * @property string $PageSize
 * @property \Aws\Api\DateTimeResult $StartTime
 */
class GetCampaignDateRangeKpiRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     CampaignId: string,
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
