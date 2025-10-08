<?php

namespace Sunaoka\Aws\Structures\DirectoryService\RegisterCertificate;

trait RegisterCertificateTrait
{
    /**
     * @param RegisterCertificateRequest $args
     * @return RegisterCertificateResponse
     */
    public function registerCertificate(RegisterCertificateRequest $args)
    {
        $result = parent::registerCertificate($args->toArray());
        return new RegisterCertificateResponse($result->toArray());
    }
}
