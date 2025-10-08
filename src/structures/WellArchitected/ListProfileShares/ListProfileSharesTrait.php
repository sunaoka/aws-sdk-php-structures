<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListProfileShares;

trait ListProfileSharesTrait
{
    /**
     * @param ListProfileSharesRequest $args
     * @return ListProfileSharesResponse
     */
    public function listProfileShares(ListProfileSharesRequest $args)
    {
        $result = parent::listProfileShares($args->toArray());
        return new ListProfileSharesResponse($result->toArray());
    }
}
