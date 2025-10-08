<?php

namespace Sunaoka\Aws\Structures\SSOOIDC\CreateTokenWithIAM;

trait CreateTokenWithIAMTrait
{
    /**
     * @param CreateTokenWithIAMRequest $args
     * @return CreateTokenWithIAMResponse
     */
    public function createTokenWithIAM(CreateTokenWithIAMRequest $args)
    {
        $result = parent::createTokenWithIAM($args->toArray());
        return new CreateTokenWithIAMResponse($result->toArray());
    }
}
