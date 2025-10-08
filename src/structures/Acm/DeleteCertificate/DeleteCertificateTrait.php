<?php

namespace Sunaoka\Aws\Structures\Acm\DeleteCertificate;

trait DeleteCertificateTrait
{
    /**
     * @param DeleteCertificateRequest $args
     * @return void
     */
    public function deleteCertificate(DeleteCertificateRequest $args)
    {
        parent::deleteCertificate($args->toArray());
    }
}
