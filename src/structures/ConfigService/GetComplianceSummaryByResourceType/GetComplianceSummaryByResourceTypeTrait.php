<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetComplianceSummaryByResourceType;

trait GetComplianceSummaryByResourceTypeTrait
{
    /**
     * @param GetComplianceSummaryByResourceTypeRequest $args
     * @return GetComplianceSummaryByResourceTypeResponse
     */
    public function getComplianceSummaryByResourceType(GetComplianceSummaryByResourceTypeRequest $args)
    {
        $result = parent::getComplianceSummaryByResourceType($args->toArray());
        return new GetComplianceSummaryByResourceTypeResponse($result->toArray());
    }
}
