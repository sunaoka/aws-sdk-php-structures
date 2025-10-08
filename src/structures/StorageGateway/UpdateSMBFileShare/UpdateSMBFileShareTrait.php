<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateSMBFileShare;

trait UpdateSMBFileShareTrait
{
    /**
     * @param UpdateSMBFileShareRequest $args
     * @return UpdateSMBFileShareResponse
     */
    public function updateSMBFileShare(UpdateSMBFileShareRequest $args)
    {
        $result = parent::updateSMBFileShare($args->toArray());
        return new UpdateSMBFileShareResponse($result->toArray());
    }
}
