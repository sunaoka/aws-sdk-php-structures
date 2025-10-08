<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\AddTags;

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
