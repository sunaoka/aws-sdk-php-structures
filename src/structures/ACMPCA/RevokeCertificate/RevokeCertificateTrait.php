<?php

namespace Sunaoka\Aws\Structures\ACMPCA\RevokeCertificate;

trait RevokeCertificateTrait
{
    /**
     * @param RevokeCertificateRequest $args
     * @return void
     */
    public function revokeCertificate(RevokeCertificateRequest $args)
    {
        parent::revokeCertificate($args->toArray());
    }
}
