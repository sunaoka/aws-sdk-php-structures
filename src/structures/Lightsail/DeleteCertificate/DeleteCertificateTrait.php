<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteCertificate;

trait DeleteCertificateTrait
{
    /**
     * @param DeleteCertificateRequest $args
     * @return DeleteCertificateResponse
     */
    public function deleteCertificate(DeleteCertificateRequest $args)
    {
        $result = parent::deleteCertificate($args->toArray());
        return new DeleteCertificateResponse($result->toArray());
    }
}
