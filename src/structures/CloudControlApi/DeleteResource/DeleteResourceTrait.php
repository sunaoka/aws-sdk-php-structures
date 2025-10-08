<?php

namespace Sunaoka\Aws\Structures\CloudControlApi\DeleteResource;

trait DeleteResourceTrait
{
    /**
     * @param DeleteResourceRequest $args
     * @return DeleteResourceResponse
     */
    public function deleteResource(DeleteResourceRequest $args)
    {
        $result = parent::deleteResource($args->toArray());
        return new DeleteResourceResponse($result->toArray());
    }
}
