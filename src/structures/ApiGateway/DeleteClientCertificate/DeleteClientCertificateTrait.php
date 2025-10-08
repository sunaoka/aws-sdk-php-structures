<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteClientCertificate;

trait DeleteClientCertificateTrait
{
    /**
     * @param DeleteClientCertificateRequest $args
     * @return void
     */
    public function deleteClientCertificate(DeleteClientCertificateRequest $args)
    {
        parent::deleteClientCertificate($args->toArray());
    }
}
