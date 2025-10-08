<?php

namespace Sunaoka\Aws\Structures\LakeFormation\RemoveLFTagsFromResource;

trait RemoveLFTagsFromResourceTrait
{
    /**
     * @param RemoveLFTagsFromResourceRequest $args
     * @return RemoveLFTagsFromResourceResponse
     */
    public function removeLFTagsFromResource(RemoveLFTagsFromResourceRequest $args)
    {
        $result = parent::removeLFTagsFromResource($args->toArray());
        return new RemoveLFTagsFromResourceResponse($result->toArray());
    }
}
