<?php

namespace Sunaoka\Aws\Structures\Acm\RequestCertificate;

trait RequestCertificateTrait
{
    /**
     * @param RequestCertificateRequest $args
     * @return RequestCertificateResponse
     */
    public function requestCertificate(RequestCertificateRequest $args)
    {
        $result = parent::requestCertificate($args->toArray());
        return new RequestCertificateResponse($result->toArray());
    }
}
