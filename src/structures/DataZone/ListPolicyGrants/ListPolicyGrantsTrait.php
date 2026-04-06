<?php

namespace Sunaoka\Aws\Structures\DataZone\ListPolicyGrants;

trait ListPolicyGrantsTrait
{
    /**
     * @param ListPolicyGrantsRequest $args
     * @return ListPolicyGrantsResponse
     */
    public function listPolicyGrants(ListPolicyGrantsRequest $args)
    {
        $result = parent::listPolicyGrants($args->toArray());
        return new ListPolicyGrantsResponse($result->toArray());
    }
}
