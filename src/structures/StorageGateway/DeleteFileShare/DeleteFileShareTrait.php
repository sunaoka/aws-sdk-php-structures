<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DeleteFileShare;

trait DeleteFileShareTrait
{
    /**
     * @param DeleteFileShareRequest $args
     * @return DeleteFileShareResponse
     */
    public function deleteFileShare(DeleteFileShareRequest $args)
    {
        $result = parent::deleteFileShare($args->toArray());
        return new DeleteFileShareResponse($result->toArray());
    }
}
