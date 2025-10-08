<?php

namespace Sunaoka\Aws\Structures\Iot\RegisterCertificateWithoutCA;

trait RegisterCertificateWithoutCATrait
{
    /**
     * @param RegisterCertificateWithoutCARequest $args
     * @return RegisterCertificateWithoutCAResponse
     */
    public function registerCertificateWithoutCA(RegisterCertificateWithoutCARequest $args)
    {
        $result = parent::registerCertificateWithoutCA($args->toArray());
        return new RegisterCertificateWithoutCAResponse($result->toArray());
    }
}
