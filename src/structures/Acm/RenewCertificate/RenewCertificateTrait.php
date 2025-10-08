<?php

namespace Sunaoka\Aws\Structures\Acm\RenewCertificate;

trait RenewCertificateTrait
{
    /**
     * @param RenewCertificateRequest $args
     * @return void
     */
    public function renewCertificate(RenewCertificateRequest $args)
    {
        parent::renewCertificate($args->toArray());
    }
}
