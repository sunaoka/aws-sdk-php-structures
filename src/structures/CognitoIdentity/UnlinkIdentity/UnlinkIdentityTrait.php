<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\UnlinkIdentity;

trait UnlinkIdentityTrait
{
    /**
     * @param UnlinkIdentityRequest $args
     * @return void
     */
    public function unlinkIdentity(UnlinkIdentityRequest $args)
    {
        parent::unlinkIdentity($args->toArray());
    }
}
