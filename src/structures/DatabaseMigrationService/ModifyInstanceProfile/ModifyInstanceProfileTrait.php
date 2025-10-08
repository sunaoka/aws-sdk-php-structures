<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyInstanceProfile;

trait ModifyInstanceProfileTrait
{
    /**
     * @param ModifyInstanceProfileRequest $args
     * @return ModifyInstanceProfileResponse
     */
    public function modifyInstanceProfile(ModifyInstanceProfileRequest $args)
    {
        $result = parent::modifyInstanceProfile($args->toArray());
        return new ModifyInstanceProfileResponse($result->toArray());
    }
}
