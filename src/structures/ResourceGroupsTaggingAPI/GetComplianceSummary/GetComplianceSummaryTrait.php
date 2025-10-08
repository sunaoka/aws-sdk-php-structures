<?php

namespace Sunaoka\Aws\Structures\ResourceGroupsTaggingAPI\GetComplianceSummary;

trait GetComplianceSummaryTrait
{
    /**
     * @param GetComplianceSummaryRequest $args
     * @return GetComplianceSummaryResponse
     */
    public function getComplianceSummary(GetComplianceSummaryRequest $args)
    {
        $result = parent::getComplianceSummary($args->toArray());
        return new GetComplianceSummaryResponse($result->toArray());
    }
}
