<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetApplicationDateRangeKpi;

trait GetApplicationDateRangeKpiTrait
{
    /**
     * @param GetApplicationDateRangeKpiRequest $args
     * @return GetApplicationDateRangeKpiResponse
     */
    public function getApplicationDateRangeKpi(GetApplicationDateRangeKpiRequest $args)
    {
        $result = parent::getApplicationDateRangeKpi($args->toArray());
        return new GetApplicationDateRangeKpiResponse($result->toArray());
    }
}
