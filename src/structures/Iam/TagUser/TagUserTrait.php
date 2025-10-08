<?php

namespace Sunaoka\Aws\Structures\Iam\TagUser;

trait TagUserTrait
{
    /**
     * @param TagUserRequest $args
     * @return void
     */
    public function tagUser(TagUserRequest $args)
    {
        parent::tagUser($args->toArray());
    }
}
