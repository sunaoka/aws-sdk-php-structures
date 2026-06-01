<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchSpaces;

trait SearchSpacesTrait
{
    /**
     * @param SearchSpacesRequest $args
     * @return SearchSpacesResponse
     */
    public function searchSpaces(SearchSpacesRequest $args)
    {
        $result = parent::searchSpaces($args->toArray());
        return new SearchSpacesResponse($result->toArray());
    }
}
