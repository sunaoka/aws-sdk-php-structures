<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateHsmClientCertificate;

trait CreateHsmClientCertificateTrait
{
    /**
     * @param CreateHsmClientCertificateRequest $args
     * @return CreateHsmClientCertificateResponse
     */
    public function createHsmClientCertificate(CreateHsmClientCertificateRequest $args)
    {
        $result = parent::createHsmClientCertificate($args->toArray());
        return new CreateHsmClientCertificateResponse($result->toArray());
    }
}
