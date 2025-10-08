<?php

namespace Sunaoka\Aws\Structures\IoTWireless\ListServiceProfiles;

trait ListServiceProfilesTrait
{
    /**
     * @param ListServiceProfilesRequest $args
     * @return ListServiceProfilesResponse
     */
    public function listServiceProfiles(ListServiceProfilesRequest $args)
    {
        $result = parent::listServiceProfiles($args->toArray());
        return new ListServiceProfilesResponse($result->toArray());
    }
}
