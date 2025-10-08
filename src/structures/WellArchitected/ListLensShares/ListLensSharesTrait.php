<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListLensShares;

trait ListLensSharesTrait
{
    /**
     * @param ListLensSharesRequest $args
     * @return ListLensSharesResponse
     */
    public function listLensShares(ListLensSharesRequest $args)
    {
        $result = parent::listLensShares($args->toArray());
        return new ListLensSharesResponse($result->toArray());
    }
}
