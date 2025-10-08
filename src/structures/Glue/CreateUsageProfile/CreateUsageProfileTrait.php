<?php

namespace Sunaoka\Aws\Structures\Glue\CreateUsageProfile;

trait CreateUsageProfileTrait
{
    /**
     * @param CreateUsageProfileRequest $args
     * @return CreateUsageProfileResponse
     */
    public function createUsageProfile(CreateUsageProfileRequest $args)
    {
        $result = parent::createUsageProfile($args->toArray());
        return new CreateUsageProfileResponse($result->toArray());
    }
}
