<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetOrganizationConformancePackDetailedStatus;

trait GetOrganizationConformancePackDetailedStatusTrait
{
    /**
     * @param GetOrganizationConformancePackDetailedStatusRequest $args
     * @return GetOrganizationConformancePackDetailedStatusResponse
     */
    public function getOrganizationConformancePackDetailedStatus(GetOrganizationConformancePackDetailedStatusRequest $args)
    {
        $result = parent::getOrganizationConformancePackDetailedStatus($args->toArray());
        return new GetOrganizationConformancePackDetailedStatusResponse($result->toArray());
    }
}
