<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteUsageProfile;

trait DeleteUsageProfileTrait
{
    /**
     * @param DeleteUsageProfileRequest $args
     * @return DeleteUsageProfileResponse
     */
    public function deleteUsageProfile(DeleteUsageProfileRequest $args)
    {
        $result = parent::deleteUsageProfile($args->toArray());
        return new DeleteUsageProfileResponse($result->toArray());
    }
}
