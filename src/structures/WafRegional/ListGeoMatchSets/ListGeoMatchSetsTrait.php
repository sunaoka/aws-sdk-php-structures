<?php

namespace Sunaoka\Aws\Structures\WafRegional\ListGeoMatchSets;

trait ListGeoMatchSetsTrait
{
    /**
     * @param ListGeoMatchSetsRequest $args
     * @return ListGeoMatchSetsResponse
     */
    public function listGeoMatchSets(ListGeoMatchSetsRequest $args)
    {
        $result = parent::listGeoMatchSets($args->toArray());
        return new ListGeoMatchSetsResponse($result->toArray());
    }
}
