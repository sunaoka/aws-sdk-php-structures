<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\SearchImageSets;

trait SearchImageSetsTrait
{
    /**
     * @param SearchImageSetsRequest $args
     * @return SearchImageSetsResponse
     */
    public function searchImageSets(SearchImageSetsRequest $args)
    {
        $result = parent::searchImageSets($args->toArray());
        return new SearchImageSetsResponse($result->toArray());
    }
}
