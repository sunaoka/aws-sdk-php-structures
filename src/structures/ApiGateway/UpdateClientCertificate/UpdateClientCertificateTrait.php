<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateClientCertificate;

trait UpdateClientCertificateTrait
{
    /**
     * @param UpdateClientCertificateRequest $args
     * @return UpdateClientCertificateResponse
     */
    public function updateClientCertificate(UpdateClientCertificateRequest $args)
    {
        $result = parent::updateClientCertificate($args->toArray());
        return new UpdateClientCertificateResponse($result->toArray());
    }
}
