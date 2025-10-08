<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetCertificates;

trait GetCertificatesTrait
{
    /**
     * @param GetCertificatesRequest $args
     * @return GetCertificatesResponse
     */
    public function getCertificates(GetCertificatesRequest $args)
    {
        $result = parent::getCertificates($args->toArray());
        return new GetCertificatesResponse($result->toArray());
    }
}
