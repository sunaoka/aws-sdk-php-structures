<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateLoginProfile;

trait UpdateLoginProfileTrait
{
    /**
     * @param UpdateLoginProfileRequest $args
     * @return void
     */
    public function updateLoginProfile(UpdateLoginProfileRequest $args)
    {
        parent::updateLoginProfile($args->toArray());
    }
}
