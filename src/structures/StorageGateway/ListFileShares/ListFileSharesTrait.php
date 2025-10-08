<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListFileShares;

trait ListFileSharesTrait
{
    /**
     * @param ListFileSharesRequest $args
     * @return ListFileSharesResponse
     */
    public function listFileShares(ListFileSharesRequest $args)
    {
        $result = parent::listFileShares($args->toArray());
        return new ListFileSharesResponse($result->toArray());
    }
}
