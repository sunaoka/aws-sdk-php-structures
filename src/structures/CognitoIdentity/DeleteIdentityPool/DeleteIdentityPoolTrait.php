<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\DeleteIdentityPool;

trait DeleteIdentityPoolTrait
{
    /**
     * @param DeleteIdentityPoolRequest $args
     * @return void
     */
    public function deleteIdentityPool(DeleteIdentityPoolRequest $args)
    {
        parent::deleteIdentityPool($args->toArray());
    }
}
