<?php

namespace Sunaoka\Aws\Structures\Iot\RegisterCACertificate;

trait RegisterCACertificateTrait
{
    /**
     * @param RegisterCACertificateRequest $args
     * @return RegisterCACertificateResponse
     */
    public function registerCACertificate(RegisterCACertificateRequest $args)
    {
        $result = parent::registerCACertificate($args->toArray());
        return new RegisterCACertificateResponse($result->toArray());
    }
}
