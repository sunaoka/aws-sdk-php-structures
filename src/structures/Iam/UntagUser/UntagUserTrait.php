<?php

namespace Sunaoka\Aws\Structures\Iam\UntagUser;

trait UntagUserTrait
{
    /**
     * @param UntagUserRequest $args
     * @return void
     */
    public function untagUser(UntagUserRequest $args)
    {
        parent::untagUser($args->toArray());
    }
}
