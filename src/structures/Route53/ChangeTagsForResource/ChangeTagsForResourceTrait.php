<?php

namespace Sunaoka\Aws\Structures\Route53\ChangeTagsForResource;

trait ChangeTagsForResourceTrait
{
    /**
     * @param ChangeTagsForResourceRequest $args
     * @return ChangeTagsForResourceResponse
     */
    public function changeTagsForResource(ChangeTagsForResourceRequest $args)
    {
        $result = parent::changeTagsForResource($args->toArray());
        return new ChangeTagsForResourceResponse($result->toArray());
    }
}
