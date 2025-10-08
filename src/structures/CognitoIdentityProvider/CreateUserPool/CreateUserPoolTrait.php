<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPool;

trait CreateUserPoolTrait
{
    /**
     * @param CreateUserPoolRequest $args
     * @return CreateUserPoolResponse
     */
    public function createUserPool(CreateUserPoolRequest $args)
    {
        $result = parent::createUserPool($args->toArray());
        return new CreateUserPoolResponse($result->toArray());
    }
}
