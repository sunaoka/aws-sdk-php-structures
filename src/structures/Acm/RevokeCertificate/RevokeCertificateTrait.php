<?php

namespace Sunaoka\Aws\Structures\Acm\RevokeCertificate;

trait RevokeCertificateTrait
{
    /**
     * @param RevokeCertificateRequest $args
     * @return RevokeCertificateResponse
     */
    public function revokeCertificate(RevokeCertificateRequest $args)
    {
        $result = parent::revokeCertificate($args->toArray());
        return new RevokeCertificateResponse($result->toArray());
    }
}
