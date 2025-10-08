<?php

namespace Sunaoka\Aws\Structures\Iam\UntagInstanceProfile;

trait UntagInstanceProfileTrait
{
    /**
     * @param UntagInstanceProfileRequest $args
     * @return void
     */
    public function untagInstanceProfile(UntagInstanceProfileRequest $args)
    {
        parent::untagInstanceProfile($args->toArray());
    }
}
