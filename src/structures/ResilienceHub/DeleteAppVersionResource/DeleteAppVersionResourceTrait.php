<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DeleteAppVersionResource;

trait DeleteAppVersionResourceTrait
{
    /**
     * @param DeleteAppVersionResourceRequest $args
     * @return DeleteAppVersionResourceResponse
     */
    public function deleteAppVersionResource(DeleteAppVersionResourceRequest $args)
    {
        $result = parent::deleteAppVersionResource($args->toArray());
        return new DeleteAppVersionResourceResponse($result->toArray());
    }
}
