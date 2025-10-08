<?php

namespace Sunaoka\Aws\Structures\Iam\ListMFADeviceTags;

trait ListMFADeviceTagsTrait
{
    /**
     * @param ListMFADeviceTagsRequest $args
     * @return ListMFADeviceTagsResponse
     */
    public function listMFADeviceTags(ListMFADeviceTagsRequest $args)
    {
        $result = parent::listMFADeviceTags($args->toArray());
        return new ListMFADeviceTagsResponse($result->toArray());
    }
}
