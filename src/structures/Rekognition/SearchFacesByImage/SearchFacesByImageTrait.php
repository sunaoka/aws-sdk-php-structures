<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchFacesByImage;

trait SearchFacesByImageTrait
{
    /**
     * @param SearchFacesByImageRequest $args
     * @return SearchFacesByImageResponse
     */
    public function searchFacesByImage(SearchFacesByImageRequest $args)
    {
        $result = parent::searchFacesByImage($args->toArray());
        return new SearchFacesByImageResponse($result->toArray());
    }
}
