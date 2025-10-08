<?php

namespace Sunaoka\Aws\Structures\Omics\ListShares;

trait ListSharesTrait
{
    /**
     * @param ListSharesRequest $args
     * @return ListSharesResponse
     */
    public function listShares(ListSharesRequest $args)
    {
        $result = parent::listShares($args->toArray());
        return new ListSharesResponse($result->toArray());
    }
}
