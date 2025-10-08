<?php

namespace Sunaoka\Aws\Structures\Iam\ListPolicyVersions;

trait ListPolicyVersionsTrait
{
    /**
     * @param ListPolicyVersionsRequest $args
     * @return ListPolicyVersionsResponse
     */
    public function listPolicyVersions(ListPolicyVersionsRequest $args)
    {
        $result = parent::listPolicyVersions($args->toArray());
        return new ListPolicyVersionsResponse($result->toArray());
    }
}
