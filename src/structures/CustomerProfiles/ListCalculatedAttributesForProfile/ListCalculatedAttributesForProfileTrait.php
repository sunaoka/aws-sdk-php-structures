<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListCalculatedAttributesForProfile;

trait ListCalculatedAttributesForProfileTrait
{
    /**
     * @param ListCalculatedAttributesForProfileRequest $args
     * @return ListCalculatedAttributesForProfileResponse
     */
    public function listCalculatedAttributesForProfile(ListCalculatedAttributesForProfileRequest $args)
    {
        $result = parent::listCalculatedAttributesForProfile($args->toArray());
        return new ListCalculatedAttributesForProfileResponse($result->toArray());
    }
}
