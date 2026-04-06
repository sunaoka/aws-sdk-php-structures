<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\SearchText;

trait SearchTextTrait
{
    /**
     * @param SearchTextRequest $args
     * @return SearchTextResponse
     */
    public function searchText(SearchTextRequest $args)
    {
        $result = parent::searchText($args->toArray());
        return new SearchTextResponse($result->toArray());
    }
}
