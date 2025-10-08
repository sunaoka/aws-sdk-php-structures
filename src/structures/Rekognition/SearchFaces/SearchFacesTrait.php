<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchFaces;

trait SearchFacesTrait
{
    /**
     * @param SearchFacesRequest $args
     * @return SearchFacesResponse
     */
    public function searchFaces(SearchFacesRequest $args)
    {
        $result = parent::searchFaces($args->toArray());
        return new SearchFacesResponse($result->toArray());
    }
}
