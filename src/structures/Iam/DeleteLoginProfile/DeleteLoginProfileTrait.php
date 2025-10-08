<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteLoginProfile;

trait DeleteLoginProfileTrait
{
    /**
     * @param DeleteLoginProfileRequest $args
     * @return void
     */
    public function deleteLoginProfile(DeleteLoginProfileRequest $args)
    {
        parent::deleteLoginProfile($args->toArray());
    }
}
