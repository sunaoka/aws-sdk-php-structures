<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyUser;

trait ModifyUserTrait
{
    /**
     * @param ModifyUserRequest $args
     * @return ModifyUserResponse
     */
    public function modifyUser(ModifyUserRequest $args)
    {
        $result = parent::modifyUser($args->toArray());
        return new ModifyUserResponse($result->toArray());
    }
}
