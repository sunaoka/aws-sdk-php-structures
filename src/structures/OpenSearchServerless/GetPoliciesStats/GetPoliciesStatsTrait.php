<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\GetPoliciesStats;

trait GetPoliciesStatsTrait
{
    /**
     * @param GetPoliciesStatsRequest $args
     * @return GetPoliciesStatsResponse
     */
    public function getPoliciesStats(GetPoliciesStatsRequest $args)
    {
        $result = parent::getPoliciesStats($args->toArray());
        return new GetPoliciesStatsResponse($result->toArray());
    }
}
