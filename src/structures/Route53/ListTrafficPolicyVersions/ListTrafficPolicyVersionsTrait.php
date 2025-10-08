<?php

namespace Sunaoka\Aws\Structures\Route53\ListTrafficPolicyVersions;

trait ListTrafficPolicyVersionsTrait
{
    /**
     * @param ListTrafficPolicyVersionsRequest $args
     * @return ListTrafficPolicyVersionsResponse
     */
    public function listTrafficPolicyVersions(ListTrafficPolicyVersionsRequest $args)
    {
        $result = parent::listTrafficPolicyVersions($args->toArray());
        return new ListTrafficPolicyVersionsResponse($result->toArray());
    }
}
