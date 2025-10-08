<?php

namespace Sunaoka\Aws\Structures\MediaStoreData\DeleteObject;

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
