<?php

namespace Sunaoka\Aws\Structures\Kms\ListResourceTags;

trait ListResourceTagsTrait
{
    /**
     * @param ListResourceTagsRequest $args
     * @return ListResourceTagsResponse
     */
    public function listResourceTags(ListResourceTagsRequest $args)
    {
        $result = parent::listResourceTags($args->toArray());
        return new ListResourceTagsResponse($result->toArray());
    }
}
