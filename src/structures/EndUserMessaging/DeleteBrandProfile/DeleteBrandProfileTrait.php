<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\DeleteBrandProfile;

trait DeleteBrandProfileTrait
{
    /**
     * @param DeleteBrandProfileRequest $args
     * @return DeleteBrandProfileResponse
     */
    public function deleteBrandProfile(DeleteBrandProfileRequest $args)
    {
        $result = parent::deleteBrandProfile($args->toArray());
        return new DeleteBrandProfileResponse($result->toArray());
    }
}
