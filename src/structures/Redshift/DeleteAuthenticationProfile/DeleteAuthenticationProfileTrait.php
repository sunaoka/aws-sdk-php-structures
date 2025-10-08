<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteAuthenticationProfile;

trait DeleteAuthenticationProfileTrait
{
    /**
     * @param DeleteAuthenticationProfileRequest $args
     * @return DeleteAuthenticationProfileResponse
     */
    public function deleteAuthenticationProfile(DeleteAuthenticationProfileRequest $args)
    {
        $result = parent::deleteAuthenticationProfile($args->toArray());
        return new DeleteAuthenticationProfileResponse($result->toArray());
    }
}
