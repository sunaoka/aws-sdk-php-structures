<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DeleteGroup;

trait DeleteGroupTrait
{
    /**
     * @param DeleteGroupRequest $args
     * @return void
     */
    public function deleteGroup(DeleteGroupRequest $args)
    {
        parent::deleteGroup($args->toArray());
    }
}
