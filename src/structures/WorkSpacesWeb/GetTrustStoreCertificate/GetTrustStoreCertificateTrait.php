<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetTrustStoreCertificate;

trait GetTrustStoreCertificateTrait
{
    /**
     * @param GetTrustStoreCertificateRequest $args
     * @return GetTrustStoreCertificateResponse
     */
    public function getTrustStoreCertificate(GetTrustStoreCertificateRequest $args)
    {
        $result = parent::getTrustStoreCertificate($args->toArray());
        return new GetTrustStoreCertificateResponse($result->toArray());
    }
}
