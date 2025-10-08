<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteCertificate;

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
