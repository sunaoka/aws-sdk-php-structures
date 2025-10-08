<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateInstanceProfile;

trait CreateInstanceProfileTrait
{
    /**
     * @param CreateInstanceProfileRequest $args
     * @return CreateInstanceProfileResponse
     */
    public function createInstanceProfile(CreateInstanceProfileRequest $args)
    {
        $result = parent::createInstanceProfile($args->toArray());
        return new CreateInstanceProfileResponse($result->toArray());
    }
}
