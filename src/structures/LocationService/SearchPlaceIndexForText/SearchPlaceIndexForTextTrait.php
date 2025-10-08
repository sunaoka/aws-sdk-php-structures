<?php

namespace Sunaoka\Aws\Structures\LocationService\SearchPlaceIndexForText;

trait SearchPlaceIndexForTextTrait
{
    /**
     * @param SearchPlaceIndexForTextRequest $args
     * @return SearchPlaceIndexForTextResponse
     */
    public function searchPlaceIndexForText(SearchPlaceIndexForTextRequest $args)
    {
        $result = parent::searchPlaceIndexForText($args->toArray());
        return new SearchPlaceIndexForTextResponse($result->toArray());
    }
}
