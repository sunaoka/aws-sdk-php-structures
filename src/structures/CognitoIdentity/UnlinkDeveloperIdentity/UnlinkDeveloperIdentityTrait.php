<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\UnlinkDeveloperIdentity;

trait UnlinkDeveloperIdentityTrait
{
    /**
     * @param UnlinkDeveloperIdentityRequest $args
     * @return void
     */
    public function unlinkDeveloperIdentity(UnlinkDeveloperIdentityRequest $args)
    {
        parent::unlinkDeveloperIdentity($args->toArray());
    }
}
