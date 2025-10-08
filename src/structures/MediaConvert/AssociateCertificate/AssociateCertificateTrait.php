<?php

namespace Sunaoka\Aws\Structures\MediaConvert\AssociateCertificate;

trait AssociateCertificateTrait
{
    /**
     * @param AssociateCertificateRequest $args
     * @return AssociateCertificateResponse
     */
    public function associateCertificate(AssociateCertificateRequest $args)
    {
        $result = parent::associateCertificate($args->toArray());
        return new AssociateCertificateResponse($result->toArray());
    }
}
