<?php

namespace Sunaoka\Aws\Structures\Support\DescribeTrustedAdvisorCheckRefreshStatuses;

trait DescribeTrustedAdvisorCheckRefreshStatusesTrait
{
    /**
     * @param DescribeTrustedAdvisorCheckRefreshStatusesRequest $args
     * @return DescribeTrustedAdvisorCheckRefreshStatusesResponse
     */
    public function describeTrustedAdvisorCheckRefreshStatuses(DescribeTrustedAdvisorCheckRefreshStatusesRequest $args)
    {
        $result = parent::describeTrustedAdvisorCheckRefreshStatuses($args->toArray());
        return new DescribeTrustedAdvisorCheckRefreshStatusesResponse($result->toArray());
    }
}
