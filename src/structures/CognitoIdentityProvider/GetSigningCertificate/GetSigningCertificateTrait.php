<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetSigningCertificate;

trait GetSigningCertificateTrait
{
    /**
     * @param GetSigningCertificateRequest $args
     * @return GetSigningCertificateResponse
     */
    public function getSigningCertificate(GetSigningCertificateRequest $args)
    {
        $result = parent::getSigningCertificate($args->toArray());
        return new GetSigningCertificateResponse($result->toArray());
    }
}
