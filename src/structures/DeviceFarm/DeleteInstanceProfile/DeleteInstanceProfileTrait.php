<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\DeleteInstanceProfile;

trait DeleteInstanceProfileTrait
{
    /**
     * @param DeleteInstanceProfileRequest $args
     * @return DeleteInstanceProfileResponse
     */
    public function deleteInstanceProfile(DeleteInstanceProfileRequest $args)
    {
        $result = parent::deleteInstanceProfile($args->toArray());
        return new DeleteInstanceProfileResponse($result->toArray());
    }
}
