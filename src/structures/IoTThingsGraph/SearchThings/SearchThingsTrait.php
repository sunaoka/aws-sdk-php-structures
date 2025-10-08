<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchThings;

trait SearchThingsTrait
{
    /**
     * @param SearchThingsRequest $args
     * @return SearchThingsResponse
     */
    public function searchThings(SearchThingsRequest $args)
    {
        $result = parent::searchThings($args->toArray());
        return new SearchThingsResponse($result->toArray());
    }
}
