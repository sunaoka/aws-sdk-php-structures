<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\EnableProfile;

trait EnableProfileTrait
{
    /**
     * @param EnableProfileRequest $args
     * @return EnableProfileResponse
     */
    public function enableProfile(EnableProfileRequest $args)
    {
        $result = parent::enableProfile($args->toArray());
        return new EnableProfileResponse($result->toArray());
    }
}
