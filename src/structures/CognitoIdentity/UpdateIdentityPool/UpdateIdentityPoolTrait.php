<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\UpdateIdentityPool;

trait UpdateIdentityPoolTrait
{
    /**
     * @param UpdateIdentityPoolRequest $args
     * @return UpdateIdentityPoolResponse
     */
    public function updateIdentityPool(UpdateIdentityPoolRequest $args)
    {
        $result = parent::updateIdentityPool($args->toArray());
        return new UpdateIdentityPoolResponse($result->toArray());
    }
}
