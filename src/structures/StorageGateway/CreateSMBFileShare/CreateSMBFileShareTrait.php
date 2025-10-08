<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CreateSMBFileShare;

trait CreateSMBFileShareTrait
{
    /**
     * @param CreateSMBFileShareRequest $args
     * @return CreateSMBFileShareResponse
     */
    public function createSMBFileShare(CreateSMBFileShareRequest $args)
    {
        $result = parent::createSMBFileShare($args->toArray());
        return new CreateSMBFileShareResponse($result->toArray());
    }
}
