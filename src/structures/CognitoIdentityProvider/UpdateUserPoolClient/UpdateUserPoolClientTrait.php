<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateUserPoolClient;

trait UpdateUserPoolClientTrait
{
    /**
     * @param UpdateUserPoolClientRequest $args
     * @return UpdateUserPoolClientResponse
     */
    public function updateUserPoolClient(UpdateUserPoolClientRequest $args)
    {
        $result = parent::updateUserPoolClient($args->toArray());
        return new UpdateUserPoolClientResponse($result->toArray());
    }
}
