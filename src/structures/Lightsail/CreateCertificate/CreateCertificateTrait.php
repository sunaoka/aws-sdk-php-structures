<?php

namespace Sunaoka\Aws\Structures\Lightsail\CreateCertificate;

trait CreateCertificateTrait
{
    /**
     * @param CreateCertificateRequest $args
     * @return CreateCertificateResponse
     */
    public function createCertificate(CreateCertificateRequest $args)
    {
        $result = parent::createCertificate($args->toArray());
        return new CreateCertificateResponse($result->toArray());
    }
}
