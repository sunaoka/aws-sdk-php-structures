<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CreateNFSFileShare;

trait CreateNFSFileShareTrait
{
    /**
     * @param CreateNFSFileShareRequest $args
     * @return CreateNFSFileShareResponse
     */
    public function createNFSFileShare(CreateNFSFileShareRequest $args)
    {
        $result = parent::createNFSFileShare($args->toArray());
        return new CreateNFSFileShareResponse($result->toArray());
    }
}
