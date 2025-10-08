<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateSMBLocalGroups;

trait UpdateSMBLocalGroupsTrait
{
    /**
     * @param UpdateSMBLocalGroupsRequest $args
     * @return UpdateSMBLocalGroupsResponse
     */
    public function updateSMBLocalGroups(UpdateSMBLocalGroupsRequest $args)
    {
        $result = parent::updateSMBLocalGroups($args->toArray());
        return new UpdateSMBLocalGroupsResponse($result->toArray());
    }
}
