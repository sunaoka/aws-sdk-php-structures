<?php

namespace Sunaoka\Aws\Structures\ELBProxy\AssociateCertificate;

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
