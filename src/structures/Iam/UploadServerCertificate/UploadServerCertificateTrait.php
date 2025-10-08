<?php

namespace Sunaoka\Aws\Structures\Iam\UploadServerCertificate;

trait UploadServerCertificateTrait
{
    /**
     * @param UploadServerCertificateRequest $args
     * @return UploadServerCertificateResponse
     */
    public function uploadServerCertificate(UploadServerCertificateRequest $args)
    {
        $result = parent::uploadServerCertificate($args->toArray());
        return new UploadServerCertificateResponse($result->toArray());
    }
}
