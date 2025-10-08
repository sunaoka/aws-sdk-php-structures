<?php

namespace Sunaoka\Aws\Structures\Chime\RegenerateSecurityToken;

trait RegenerateSecurityTokenTrait
{
    /**
     * @param RegenerateSecurityTokenRequest $args
     * @return RegenerateSecurityTokenResponse
     */
    public function regenerateSecurityToken(RegenerateSecurityTokenRequest $args)
    {
        $result = parent::regenerateSecurityToken($args->toArray());
        return new RegenerateSecurityTokenResponse($result->toArray());
    }
}
