<?php

namespace Sunaoka\Aws\Structures\Signin\CreateOAuth2TokenWithIAM;

trait CreateOAuth2TokenWithIAMTrait
{
    /**
     * @param CreateOAuth2TokenWithIAMRequest $args
     * @return CreateOAuth2TokenWithIAMResponse
     */
    public function createOAuth2TokenWithIAM(CreateOAuth2TokenWithIAMRequest $args)
    {
        $result = parent::createOAuth2TokenWithIAM($args->toArray());
        return new CreateOAuth2TokenWithIAMResponse($result->toArray());
    }
}
