<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListTagsForGlobalResource;

trait ListTagsForGlobalResourceTrait
{
    /**
     * @param ListTagsForGlobalResourceRequest $args
     * @return ListTagsForGlobalResourceResponse
     */
    public function listTagsForGlobalResource(ListTagsForGlobalResourceRequest $args)
    {
        $result = parent::listTagsForGlobalResource($args->toArray());
        return new ListTagsForGlobalResourceResponse($result->toArray());
    }
}
