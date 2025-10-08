<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateCACertificate;

trait UpdateCACertificateTrait
{
    /**
     * @param UpdateCACertificateRequest $args
     * @return void
     */
    public function updateCACertificate(UpdateCACertificateRequest $args)
    {
        parent::updateCACertificate($args->toArray());
    }
}
