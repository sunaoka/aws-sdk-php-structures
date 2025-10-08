<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPoolClient;

trait CreateUserPoolClientTrait
{
    /**
     * @param CreateUserPoolClientRequest $args
     * @return CreateUserPoolClientResponse
     */
    public function createUserPoolClient(CreateUserPoolClientRequest $args)
    {
        $result = parent::createUserPoolClient($args->toArray());
        return new CreateUserPoolClientResponse($result->toArray());
    }
}
