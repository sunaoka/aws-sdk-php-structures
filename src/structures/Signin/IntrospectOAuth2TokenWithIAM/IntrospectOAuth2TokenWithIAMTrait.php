<?php

namespace Sunaoka\Aws\Structures\Signin\IntrospectOAuth2TokenWithIAM;

trait IntrospectOAuth2TokenWithIAMTrait
{
    /**
     * @param IntrospectOAuth2TokenWithIAMRequest $args
     * @return IntrospectOAuth2TokenWithIAMResponse
     */
    public function introspectOAuth2TokenWithIAM(IntrospectOAuth2TokenWithIAMRequest $args)
    {
        $result = parent::introspectOAuth2TokenWithIAM($args->toArray());
        return new IntrospectOAuth2TokenWithIAMResponse($result->toArray());
    }
}
