<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetAggregateConformancePackComplianceSummary;

trait GetAggregateConformancePackComplianceSummaryTrait
{
    /**
     * @param GetAggregateConformancePackComplianceSummaryRequest $args
     * @return GetAggregateConformancePackComplianceSummaryResponse
     */
    public function getAggregateConformancePackComplianceSummary(
        GetAggregateConformancePackComplianceSummaryRequest $args,
    ) {
        $result = parent::getAggregateConformancePackComplianceSummary($args->toArray());
        return new GetAggregateConformancePackComplianceSummaryResponse($result->toArray());
    }
}
