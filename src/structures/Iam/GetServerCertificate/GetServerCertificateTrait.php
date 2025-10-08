<?php

namespace Sunaoka\Aws\Structures\Iam\GetServerCertificate;

trait GetServerCertificateTrait
{
    /**
     * @param GetServerCertificateRequest $args
     * @return GetServerCertificateResponse
     */
    public function getServerCertificate(GetServerCertificateRequest $args)
    {
        $result = parent::getServerCertificate($args->toArray());
        return new GetServerCertificateResponse($result->toArray());
    }
}
