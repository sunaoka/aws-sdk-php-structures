<?php

namespace Sunaoka\Aws\Structures\PersonalizeEvents\PutUsers;

trait PutUsersTrait
{
    /**
     * @param PutUsersRequest $args
     * @return void
     */
    public function putUsers(PutUsersRequest $args)
    {
        parent::putUsers($args->toArray());
    }
}
