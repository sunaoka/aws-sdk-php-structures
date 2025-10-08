<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteHsmClientCertificate;

trait DeleteHsmClientCertificateTrait
{
    /**
     * @param DeleteHsmClientCertificateRequest $args
     * @return void
     */
    public function deleteHsmClientCertificate(DeleteHsmClientCertificateRequest $args)
    {
        parent::deleteHsmClientCertificate($args->toArray());
    }
}
