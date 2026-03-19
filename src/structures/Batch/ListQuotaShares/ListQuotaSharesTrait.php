<?php

namespace Sunaoka\Aws\Structures\Batch\ListQuotaShares;

trait ListQuotaSharesTrait
{
    /**
     * @param ListQuotaSharesRequest $args
     * @return ListQuotaSharesResponse
     */
    public function listQuotaShares(ListQuotaSharesRequest $args)
    {
        $result = parent::listQuotaShares($args->toArray());
        return new ListQuotaSharesResponse($result->toArray());
    }
}
