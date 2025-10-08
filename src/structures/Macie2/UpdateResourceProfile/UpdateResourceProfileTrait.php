<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateResourceProfile;

trait UpdateResourceProfileTrait
{
    /**
     * @param UpdateResourceProfileRequest $args
     * @return UpdateResourceProfileResponse
     */
    public function updateResourceProfile(UpdateResourceProfileRequest $args)
    {
        $result = parent::updateResourceProfile($args->toArray());
        return new UpdateResourceProfileResponse($result->toArray());
    }
}
