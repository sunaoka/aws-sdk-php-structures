<?php

namespace Sunaoka\Aws\Structures\Acm\GetCertificate;

trait GetCertificateTrait
{
    /**
     * @param GetCertificateRequest $args
     * @return GetCertificateResponse
     */
    public function getCertificate(GetCertificateRequest $args)
    {
        $result = parent::getCertificate($args->toArray());
        return new GetCertificateResponse($result->toArray());
    }
}
