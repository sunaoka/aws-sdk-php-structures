<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateCertificate;

trait UpdateCertificateTrait
{
    /**
     * @param UpdateCertificateRequest $args
     * @return void
     */
    public function updateCertificate(UpdateCertificateRequest $args)
    {
        parent::updateCertificate($args->toArray());
    }
}
