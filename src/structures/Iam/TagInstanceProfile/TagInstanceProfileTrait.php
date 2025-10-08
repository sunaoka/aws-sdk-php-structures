<?php

namespace Sunaoka\Aws\Structures\Iam\TagInstanceProfile;

trait TagInstanceProfileTrait
{
    /**
     * @param TagInstanceProfileRequest $args
     * @return void
     */
    public function tagInstanceProfile(TagInstanceProfileRequest $args)
    {
        parent::tagInstanceProfile($args->toArray());
    }
}
