<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteServerCertificate;

trait DeleteServerCertificateTrait
{
    /**
     * @param DeleteServerCertificateRequest $args
     * @return void
     */
    public function deleteServerCertificate(DeleteServerCertificateRequest $args)
    {
        parent::deleteServerCertificate($args->toArray());
    }
}
