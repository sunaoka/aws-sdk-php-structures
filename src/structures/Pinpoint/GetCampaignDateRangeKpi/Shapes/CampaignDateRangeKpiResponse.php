<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaignDateRangeKpi\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationId
 * @property string $CampaignId
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $KpiName
 * @property BaseKpiResult $KpiResult
 * @property string $NextToken
 * @property \Aws\Api\DateTimeResult $StartTime
 */
class CampaignDateRangeKpiResponse extends Shape
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     CampaignId: string,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     KpiName: string,
     *     KpiResult: BaseKpiResult,
     *     NextToken?: string,
     *     StartTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
