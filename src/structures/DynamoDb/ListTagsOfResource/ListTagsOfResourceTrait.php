<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ListTagsOfResource;

trait ListTagsOfResourceTrait
{
    /**
     * @param ListTagsOfResourceRequest $args
     * @return ListTagsOfResourceResponse
     */
    public function listTagsOfResource(ListTagsOfResourceRequest $args)
    {
        $result = parent::listTagsOfResource($args->toArray());
        return new ListTagsOfResourceResponse($result->toArray());
    }
}
