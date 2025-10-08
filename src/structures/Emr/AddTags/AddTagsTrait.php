<?php

namespace Sunaoka\Aws\Structures\Emr\AddTags;

trait AddTagsTrait
{
    /**
     * @param AddTagsRequest $args
     * @return AddTagsResponse
     */
    public function addTags(AddTagsRequest $args)
    {
        $result = parent::addTags($args->toArray());
        return new AddTagsResponse($result->toArray());
    }
}
