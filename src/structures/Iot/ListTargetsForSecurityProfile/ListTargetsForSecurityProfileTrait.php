<?php

namespace Sunaoka\Aws\Structures\Iot\ListTargetsForSecurityProfile;

trait ListTargetsForSecurityProfileTrait
{
    /**
     * @param ListTargetsForSecurityProfileRequest $args
     * @return ListTargetsForSecurityProfileResponse
     */
    public function listTargetsForSecurityProfile(ListTargetsForSecurityProfileRequest $args)
    {
        $result = parent::listTargetsForSecurityProfile($args->toArray());
        return new ListTargetsForSecurityProfileResponse($result->toArray());
    }
}
