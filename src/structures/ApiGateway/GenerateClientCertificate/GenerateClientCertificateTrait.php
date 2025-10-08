<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GenerateClientCertificate;

trait GenerateClientCertificateTrait
{
    /**
     * @param GenerateClientCertificateRequest $args
     * @return GenerateClientCertificateResponse
     */
    public function generateClientCertificate(GenerateClientCertificateRequest $args)
    {
        $result = parent::generateClientCertificate($args->toArray());
        return new GenerateClientCertificateResponse($result->toArray());
    }
}
