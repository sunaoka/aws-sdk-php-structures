<?php

namespace Sunaoka\Aws\Structures\Iot\CreateCertificateFromCsr;

trait CreateCertificateFromCsrTrait
{
    /**
     * @param CreateCertificateFromCsrRequest $args
     * @return CreateCertificateFromCsrResponse
     */
    public function createCertificateFromCsr(CreateCertificateFromCsrRequest $args)
    {
        $result = parent::createCertificateFromCsr($args->toArray());
        return new CreateCertificateFromCsrResponse($result->toArray());
    }
}
