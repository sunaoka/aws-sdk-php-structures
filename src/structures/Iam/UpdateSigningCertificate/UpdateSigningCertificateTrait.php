<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateSigningCertificate;

trait UpdateSigningCertificateTrait
{
    /**
     * @param UpdateSigningCertificateRequest $args
     * @return void
     */
    public function updateSigningCertificate(UpdateSigningCertificateRequest $args)
    {
        parent::updateSigningCertificate($args->toArray());
    }
}
