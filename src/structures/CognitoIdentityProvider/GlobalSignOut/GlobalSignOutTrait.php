<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GlobalSignOut;

trait GlobalSignOutTrait
{
    /**
     * @param GlobalSignOutRequest $args
     * @return GlobalSignOutResponse
     */
    public function globalSignOut(GlobalSignOutRequest $args)
    {
        $result = parent::globalSignOut($args->toArray());
        return new GlobalSignOutResponse($result->toArray());
    }
}
