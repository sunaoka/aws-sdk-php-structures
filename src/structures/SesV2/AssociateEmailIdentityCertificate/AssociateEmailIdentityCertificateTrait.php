<?php

namespace Sunaoka\Aws\Structures\SesV2\AssociateEmailIdentityCertificate;

trait AssociateEmailIdentityCertificateTrait
{
    /**
     * @param AssociateEmailIdentityCertificateRequest $args
     * @return AssociateEmailIdentityCertificateResponse
     */
    public function associateEmailIdentityCertificate(AssociateEmailIdentityCertificateRequest $args)
    {
        $result = parent::associateEmailIdentityCertificate($args->toArray());
        return new AssociateEmailIdentityCertificateResponse($result->toArray());
    }
}
