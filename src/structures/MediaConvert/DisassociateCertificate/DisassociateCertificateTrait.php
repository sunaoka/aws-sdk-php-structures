<?php

namespace Sunaoka\Aws\Structures\MediaConvert\DisassociateCertificate;

trait DisassociateCertificateTrait
{
    /**
     * @param DisassociateCertificateRequest $args
     * @return DisassociateCertificateResponse
     */
    public function disassociateCertificate(DisassociateCertificateRequest $args)
    {
        $result = parent::disassociateCertificate($args->toArray());
        return new DisassociateCertificateResponse($result->toArray());
    }
}
