<?php

namespace Sunaoka\Aws\Structures\Rekognition\StartFaceSearch;

trait StartFaceSearchTrait
{
    /**
     * @param StartFaceSearchRequest $args
     * @return StartFaceSearchResponse
     */
    public function startFaceSearch(StartFaceSearchRequest $args)
    {
        $result = parent::startFaceSearch($args->toArray());
        return new StartFaceSearchResponse($result->toArray());
    }
}
