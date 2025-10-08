<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteInstanceProfile;

trait DeleteInstanceProfileTrait
{
    /**
     * @param DeleteInstanceProfileRequest $args
     * @return void
     */
    public function deleteInstanceProfile(DeleteInstanceProfileRequest $args)
    {
        parent::deleteInstanceProfile($args->toArray());
    }
}
