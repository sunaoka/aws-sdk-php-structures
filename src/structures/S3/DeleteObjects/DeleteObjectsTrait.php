<?php

namespace Sunaoka\Aws\Structures\S3\DeleteObjects;

trait DeleteObjectsTrait
{
    /**
     * @param DeleteObjectsRequest $args
     * @return DeleteObjectsResponse
     */
    public function deleteObjects(DeleteObjectsRequest $args)
    {
        $result = parent::deleteObjects($args->toArray());
        return new DeleteObjectsResponse($result->toArray());
    }
}
