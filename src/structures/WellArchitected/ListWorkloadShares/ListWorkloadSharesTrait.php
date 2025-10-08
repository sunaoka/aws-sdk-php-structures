<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListWorkloadShares;

trait ListWorkloadSharesTrait
{
    /**
     * @param ListWorkloadSharesRequest $args
     * @return ListWorkloadSharesResponse
     */
    public function listWorkloadShares(ListWorkloadSharesRequest $args)
    {
        $result = parent::listWorkloadShares($args->toArray());
        return new ListWorkloadSharesResponse($result->toArray());
    }
}
