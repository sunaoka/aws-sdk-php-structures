<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetConformancePackComplianceSummary;

trait GetConformancePackComplianceSummaryTrait
{
    /**
     * @param GetConformancePackComplianceSummaryRequest $args
     * @return GetConformancePackComplianceSummaryResponse
     */
    public function getConformancePackComplianceSummary(GetConformancePackComplianceSummaryRequest $args)
    {
        $result = parent::getConformancePackComplianceSummary($args->toArray());
        return new GetConformancePackComplianceSummaryResponse($result->toArray());
    }
}
