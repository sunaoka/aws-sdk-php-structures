<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteSigningCertificate;

trait DeleteSigningCertificateTrait
{
    /**
     * @param DeleteSigningCertificateRequest $args
     * @return void
     */
    public function deleteSigningCertificate(DeleteSigningCertificateRequest $args)
    {
        parent::deleteSigningCertificate($args->toArray());
    }
}
