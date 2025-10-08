<?php

namespace Sunaoka\Aws\Structures\QApps\AssociateQAppWithUser;

trait AssociateQAppWithUserTrait
{
    /**
     * @param AssociateQAppWithUserRequest $args
     * @return void
     */
    public function associateQAppWithUser(AssociateQAppWithUserRequest $args)
    {
        parent::associateQAppWithUser($args->toArray());
    }
}
