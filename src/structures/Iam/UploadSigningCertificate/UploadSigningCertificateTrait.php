<?php

namespace Sunaoka\Aws\Structures\Iam\UploadSigningCertificate;

trait UploadSigningCertificateTrait
{
    /**
     * @param UploadSigningCertificateRequest $args
     * @return UploadSigningCertificateResponse
     */
    public function uploadSigningCertificate(UploadSigningCertificateRequest $args)
    {
        $result = parent::uploadSigningCertificate($args->toArray());
        return new UploadSigningCertificateResponse($result->toArray());
    }
}
