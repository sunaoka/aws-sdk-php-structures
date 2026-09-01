<?php

namespace Sunaoka\Aws\Structures\SesV2\DisassociateEmailIdentityCertificate;

trait DisassociateEmailIdentityCertificateTrait
{
    /**
     * @param DisassociateEmailIdentityCertificateRequest $args
     * @return DisassociateEmailIdentityCertificateResponse
     */
    public function disassociateEmailIdentityCertificate(DisassociateEmailIdentityCertificateRequest $args)
    {
        $result = parent::disassociateEmailIdentityCertificate($args->toArray());
        return new DisassociateEmailIdentityCertificateResponse($result->toArray());
    }
}
