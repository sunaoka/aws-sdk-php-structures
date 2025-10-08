<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetClientCertificates;

trait GetClientCertificatesTrait
{
    /**
     * @param GetClientCertificatesRequest $args
     * @return GetClientCertificatesResponse
     */
    public function getClientCertificates(GetClientCertificatesRequest $args)
    {
        $result = parent::getClientCertificates($args->toArray());
        return new GetClientCertificatesResponse($result->toArray());
    }
}
