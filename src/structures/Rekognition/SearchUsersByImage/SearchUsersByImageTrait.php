<?php

namespace Sunaoka\Aws\Structures\Rekognition\SearchUsersByImage;

trait SearchUsersByImageTrait
{
    /**
     * @param SearchUsersByImageRequest $args
     * @return SearchUsersByImageResponse
     */
    public function searchUsersByImage(SearchUsersByImageRequest $args)
    {
        $result = parent::searchUsersByImage($args->toArray());
        return new SearchUsersByImageResponse($result->toArray());
    }
}
