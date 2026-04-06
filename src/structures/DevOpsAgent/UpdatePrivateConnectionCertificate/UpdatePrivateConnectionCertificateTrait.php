<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdatePrivateConnectionCertificate;

trait UpdatePrivateConnectionCertificateTrait
{
    /**
     * @param UpdatePrivateConnectionCertificateRequest $args
     * @return UpdatePrivateConnectionCertificateResponse
     */
    public function updatePrivateConnectionCertificate(UpdatePrivateConnectionCertificateRequest $args)
    {
        $result = parent::updatePrivateConnectionCertificate($args->toArray());
        return new UpdatePrivateConnectionCertificateResponse($result->toArray());
    }
}
