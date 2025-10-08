<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetClientCertificate;

trait GetClientCertificateTrait
{
    /**
     * @param GetClientCertificateRequest $args
     * @return GetClientCertificateResponse
     */
    public function getClientCertificate(GetClientCertificateRequest $args)
    {
        $result = parent::getClientCertificate($args->toArray());
        return new GetClientCertificateResponse($result->toArray());
    }
}
