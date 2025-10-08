<?php

namespace Sunaoka\Aws\Structures\Proton\GetResourcesSummary;

trait GetResourcesSummaryTrait
{
    /**
     * @param GetResourcesSummaryRequest $args
     * @return GetResourcesSummaryResponse
     */
    public function getResourcesSummary(GetResourcesSummaryRequest $args)
    {
        $result = parent::getResourcesSummary($args->toArray());
        return new GetResourcesSummaryResponse($result->toArray());
    }
}
