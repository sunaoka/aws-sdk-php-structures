<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteIpamExternalResourceVerificationToken;

trait DeleteIpamExternalResourceVerificationTokenTrait
{
    /**
     * @param DeleteIpamExternalResourceVerificationTokenRequest $args
     * @return DeleteIpamExternalResourceVerificationTokenResponse
     */
    public function deleteIpamExternalResourceVerificationToken(
        DeleteIpamExternalResourceVerificationTokenRequest $args,
    ) {
        $result = parent::deleteIpamExternalResourceVerificationToken($args->toArray());
        return new DeleteIpamExternalResourceVerificationTokenResponse($result->toArray());
    }
}
