<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateNFSFileShare;

trait UpdateNFSFileShareTrait
{
    /**
     * @param UpdateNFSFileShareRequest $args
     * @return UpdateNFSFileShareResponse
     */
    public function updateNFSFileShare(UpdateNFSFileShareRequest $args)
    {
        $result = parent::updateNFSFileShare($args->toArray());
        return new UpdateNFSFileShareResponse($result->toArray());
    }
}
