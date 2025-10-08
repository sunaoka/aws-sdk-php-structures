<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetConformancePackComplianceDetails;

trait GetConformancePackComplianceDetailsTrait
{
    /**
     * @param GetConformancePackComplianceDetailsRequest $args
     * @return GetConformancePackComplianceDetailsResponse
     */
    public function getConformancePackComplianceDetails(GetConformancePackComplianceDetailsRequest $args)
    {
        $result = parent::getConformancePackComplianceDetails($args->toArray());
        return new GetConformancePackComplianceDetailsResponse($result->toArray());
    }
}
