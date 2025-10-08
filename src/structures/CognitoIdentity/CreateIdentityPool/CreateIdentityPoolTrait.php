<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\CreateIdentityPool;

trait CreateIdentityPoolTrait
{
    /**
     * @param CreateIdentityPoolRequest $args
     * @return CreateIdentityPoolResponse
     */
    public function createIdentityPool(CreateIdentityPoolRequest $args)
    {
        $result = parent::createIdentityPool($args->toArray());
        return new CreateIdentityPoolResponse($result->toArray());
    }
}
