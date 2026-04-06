<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateUsageProfile;

trait UpdateUsageProfileTrait
{
    /**
     * @param UpdateUsageProfileRequest $args
     * @return UpdateUsageProfileResponse
     */
    public function updateUsageProfile(UpdateUsageProfileRequest $args)
    {
        $result = parent::updateUsageProfile($args->toArray());
        return new UpdateUsageProfileResponse($result->toArray());
    }
}
