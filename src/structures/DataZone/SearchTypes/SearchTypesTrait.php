<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchTypes;

trait SearchTypesTrait
{
    /**
     * @param SearchTypesRequest $args
     * @return SearchTypesResponse
     */
    public function searchTypes(SearchTypesRequest $args)
    {
        $result = parent::searchTypes($args->toArray());
        return new SearchTypesResponse($result->toArray());
    }
}
