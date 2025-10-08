<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateServerCertificate;

trait UpdateServerCertificateTrait
{
    /**
     * @param UpdateServerCertificateRequest $args
     * @return void
     */
    public function updateServerCertificate(UpdateServerCertificateRequest $args)
    {
        parent::updateServerCertificate($args->toArray());
    }
}
