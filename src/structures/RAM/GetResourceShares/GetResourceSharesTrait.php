<?php

namespace Sunaoka\Aws\Structures\RAM\GetResourceShares;

trait GetResourceSharesTrait
{
    /**
     * @param GetResourceSharesRequest $args
     * @return GetResourceSharesResponse
     */
    public function getResourceShares(GetResourceSharesRequest $args)
    {
        $result = parent::getResourceShares($args->toArray());
        return new GetResourceSharesResponse($result->toArray());
    }
}
