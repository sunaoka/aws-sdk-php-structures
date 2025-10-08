<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetCampaignDateRangeKpi;

trait GetCampaignDateRangeKpiTrait
{
    /**
     * @param GetCampaignDateRangeKpiRequest $args
     * @return GetCampaignDateRangeKpiResponse
     */
    public function getCampaignDateRangeKpi(GetCampaignDateRangeKpiRequest $args)
    {
        $result = parent::getCampaignDateRangeKpi($args->toArray());
        return new GetCampaignDateRangeKpiResponse($result->toArray());
    }
}
