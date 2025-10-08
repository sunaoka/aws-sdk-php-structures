<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DeregisterCertificate;

trait DeregisterCertificateTrait
{
    /**
     * @param DeregisterCertificateRequest $args
     * @return DeregisterCertificateResponse
     */
    public function deregisterCertificate(DeregisterCertificateRequest $args)
    {
        $result = parent::deregisterCertificate($args->toArray());
        return new DeregisterCertificateResponse($result->toArray());
    }
}
