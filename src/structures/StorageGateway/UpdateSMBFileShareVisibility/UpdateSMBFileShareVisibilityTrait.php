<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateSMBFileShareVisibility;

trait UpdateSMBFileShareVisibilityTrait
{
    /**
     * @param UpdateSMBFileShareVisibilityRequest $args
     * @return UpdateSMBFileShareVisibilityResponse
     */
    public function updateSMBFileShareVisibility(UpdateSMBFileShareVisibilityRequest $args)
    {
        $result = parent::updateSMBFileShareVisibility($args->toArray());
        return new UpdateSMBFileShareVisibilityResponse($result->toArray());
    }
}
