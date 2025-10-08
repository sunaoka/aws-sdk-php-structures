<?php

namespace Sunaoka\Aws\Structures\kendra\ListFeaturedResultsSets;

trait ListFeaturedResultsSetsTrait
{
    /**
     * @param ListFeaturedResultsSetsRequest $args
     * @return ListFeaturedResultsSetsResponse
     */
    public function listFeaturedResultsSets(ListFeaturedResultsSetsRequest $args)
    {
        $result = parent::listFeaturedResultsSets($args->toArray());
        return new ListFeaturedResultsSetsResponse($result->toArray());
    }
}
