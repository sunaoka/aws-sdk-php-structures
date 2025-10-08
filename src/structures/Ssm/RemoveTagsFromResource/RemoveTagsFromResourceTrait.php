<?php

namespace Sunaoka\Aws\Structures\Ssm\RemoveTagsFromResource;

trait RemoveTagsFromResourceTrait
{
    /**
     * @param RemoveTagsFromResourceRequest $args
     * @return RemoveTagsFromResourceResponse
     */
    public function removeTagsFromResource(RemoveTagsFromResourceRequest $args)
    {
        $result = parent::removeTagsFromResource($args->toArray());
        return new RemoveTagsFromResourceResponse($result->toArray());
    }
}
