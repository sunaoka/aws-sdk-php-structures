<?php

namespace Sunaoka\Aws\Structures\B2bi\ListTagsForResource;

trait ListTagsForResourceTrait
{
    /**
     * @param ListTagsForResourceRequest $args
     * @return ListTagsForResourceResponse
     */
    public function listTagsForResource(ListTagsForResourceRequest $args)
    {
        $result = parent::listTagsForResource($args->toArray());
        return new ListTagsForResourceResponse($result->toArray());
    }
}
