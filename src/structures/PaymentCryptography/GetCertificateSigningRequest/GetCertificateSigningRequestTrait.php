<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\GetCertificateSigningRequest;

trait GetCertificateSigningRequestTrait
{
    /**
     * @param GetCertificateSigningRequestRequest $args
     * @return GetCertificateSigningRequestResponse
     */
    public function getCertificateSigningRequest(GetCertificateSigningRequestRequest $args)
    {
        $result = parent::getCertificateSigningRequest($args->toArray());
        return new GetCertificateSigningRequestResponse($result->toArray());
    }
}
