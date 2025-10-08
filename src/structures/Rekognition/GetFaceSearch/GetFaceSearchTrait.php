<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetFaceSearch;

trait GetFaceSearchTrait
{
    /**
     * @param GetFaceSearchRequest $args
     * @return GetFaceSearchResponse
     */
    public function getFaceSearch(GetFaceSearchRequest $args)
    {
        $result = parent::getFaceSearch($args->toArray());
        return new GetFaceSearchResponse($result->toArray());
    }
}
