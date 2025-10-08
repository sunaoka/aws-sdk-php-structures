<?php

namespace Sunaoka\Aws\Structures\Emr\RemoveTags;

trait RemoveTagsTrait
{
    /**
     * @param RemoveTagsRequest $args
     * @return RemoveTagsResponse
     */
    public function removeTags(RemoveTagsRequest $args)
    {
        $result = parent::removeTags($args->toArray());
        return new RemoveTagsResponse($result->toArray());
    }
}
