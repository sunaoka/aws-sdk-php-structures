<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateIpamExternalResourceVerificationToken;

trait CreateIpamExternalResourceVerificationTokenTrait
{
    /**
     * @param CreateIpamExternalResourceVerificationTokenRequest $args
     * @return CreateIpamExternalResourceVerificationTokenResponse
     */
    public function createIpamExternalResourceVerificationToken(
        CreateIpamExternalResourceVerificationTokenRequest $args,
    ) {
        $result = parent::createIpamExternalResourceVerificationToken($args->toArray());
        return new CreateIpamExternalResourceVerificationTokenResponse($result->toArray());
    }
}
