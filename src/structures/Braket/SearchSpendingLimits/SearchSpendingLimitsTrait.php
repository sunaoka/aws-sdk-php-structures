<?php

namespace Sunaoka\Aws\Structures\Braket\SearchSpendingLimits;

trait SearchSpendingLimitsTrait
{
    /**
     * @param SearchSpendingLimitsRequest $args
     * @return SearchSpendingLimitsResponse
     */
    public function searchSpendingLimits(SearchSpendingLimitsRequest $args)
    {
        $result = parent::searchSpendingLimits($args->toArray());
        return new SearchSpendingLimitsResponse($result->toArray());
    }
}
