<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DeleteUserPoolClient;

trait DeleteUserPoolClientTrait
{
    /**
     * @param DeleteUserPoolClientRequest $args
     * @return void
     */
    public function deleteUserPoolClient(DeleteUserPoolClientRequest $args)
    {
        parent::deleteUserPoolClient($args->toArray());
    }
}
