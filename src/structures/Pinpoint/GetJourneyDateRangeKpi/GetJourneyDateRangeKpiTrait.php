<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourneyDateRangeKpi;

trait GetJourneyDateRangeKpiTrait
{
    /**
     * @param GetJourneyDateRangeKpiRequest $args
     * @return GetJourneyDateRangeKpiResponse
     */
    public function getJourneyDateRangeKpi(GetJourneyDateRangeKpiRequest $args)
    {
        $result = parent::getJourneyDateRangeKpi($args->toArray());
        return new GetJourneyDateRangeKpiResponse($result->toArray());
    }
}
