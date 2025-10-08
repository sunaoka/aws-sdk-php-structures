<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\GetPublicKeyCertificate;

trait GetPublicKeyCertificateTrait
{
    /**
     * @param GetPublicKeyCertificateRequest $args
     * @return GetPublicKeyCertificateResponse
     */
    public function getPublicKeyCertificate(GetPublicKeyCertificateRequest $args)
    {
        $result = parent::getPublicKeyCertificate($args->toArray());
        return new GetPublicKeyCertificateResponse($result->toArray());
    }
}
