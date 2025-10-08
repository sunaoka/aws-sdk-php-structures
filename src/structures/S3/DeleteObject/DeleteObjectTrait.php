<?php

namespace Sunaoka\Aws\Structures\S3\DeleteObject;

trait DeleteObjectTrait
{
    /**
     * @param DeleteObjectRequest $args
     * @return DeleteObjectResponse
     */
    public function deleteObject(DeleteObjectRequest $args)
    {
        $result = parent::deleteObject($args->toArray());
        return new DeleteObjectResponse($result->toArray());
    }
}
