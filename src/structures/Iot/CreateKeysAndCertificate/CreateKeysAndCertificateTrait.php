<?php

namespace Sunaoka\Aws\Structures\Iot\CreateKeysAndCertificate;

trait CreateKeysAndCertificateTrait
{
    /**
     * @param CreateKeysAndCertificateRequest $args
     * @return CreateKeysAndCertificateResponse
     */
    public function createKeysAndCertificate(CreateKeysAndCertificateRequest $args)
    {
        $result = parent::createKeysAndCertificate($args->toArray());
        return new CreateKeysAndCertificateResponse($result->toArray());
    }
}
