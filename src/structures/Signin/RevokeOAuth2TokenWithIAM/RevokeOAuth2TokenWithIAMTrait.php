<?php

namespace Sunaoka\Aws\Structures\Signin\RevokeOAuth2TokenWithIAM;

trait RevokeOAuth2TokenWithIAMTrait
{
    /**
     * @param RevokeOAuth2TokenWithIAMRequest $args
     * @return RevokeOAuth2TokenWithIAMResponse
     */
    public function revokeOAuth2TokenWithIAM(RevokeOAuth2TokenWithIAMRequest $args)
    {
        $result = parent::revokeOAuth2TokenWithIAM($args->toArray());
        return new RevokeOAuth2TokenWithIAMResponse($result->toArray());
    }
}
