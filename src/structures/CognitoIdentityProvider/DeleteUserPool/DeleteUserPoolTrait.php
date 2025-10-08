<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DeleteUserPool;

trait DeleteUserPoolTrait
{
    /**
     * @param DeleteUserPoolRequest $args
     * @return void
     */
    public function deleteUserPool(DeleteUserPoolRequest $args)
    {
        parent::deleteUserPool($args->toArray());
    }
}
