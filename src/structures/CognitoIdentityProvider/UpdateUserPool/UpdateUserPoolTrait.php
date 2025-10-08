<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateUserPool;

trait UpdateUserPoolTrait
{
    /**
     * @param UpdateUserPoolRequest $args
     * @return UpdateUserPoolResponse
     */
    public function updateUserPool(UpdateUserPoolRequest $args)
    {
        $result = parent::updateUserPool($args->toArray());
        return new UpdateUserPoolResponse($result->toArray());
    }
}
