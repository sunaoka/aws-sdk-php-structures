<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaignDateRangeKpi;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property string $CampaignId
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string $KpiName
 * @property string|null $NextToken
 * @property string|null $PageSize
 * @property \Aws\Api\DateTimeResult|null $StartTime
 */
class GetCampaignDateRangeKpiRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     CampaignId: string,
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
