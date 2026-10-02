<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\ListBrandProfiles;

trait ListBrandProfilesTrait
{
    /**
     * @param ListBrandProfilesRequest $args
     * @return ListBrandProfilesResponse
     */
    public function listBrandProfiles(ListBrandProfilesRequest $args)
    {
        $result = parent::listBrandProfiles($args->toArray());
        return new ListBrandProfilesResponse($result->toArray());
    }
}
