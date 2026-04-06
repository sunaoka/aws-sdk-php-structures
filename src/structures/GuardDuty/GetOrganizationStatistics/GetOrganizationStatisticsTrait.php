<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetOrganizationStatistics;

trait GetOrganizationStatisticsTrait
{
    /**
     * @return GetOrganizationStatisticsResponse
     */
    public function getOrganizationStatistics()
    {
        $result = parent::getOrganizationStatistics();
        return new GetOrganizationStatisticsResponse($result->toArray());
    }
}
