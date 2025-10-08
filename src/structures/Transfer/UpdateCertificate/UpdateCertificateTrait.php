<?php

namespace Sunaoka\Aws\Structures\Transfer\UpdateCertificate;

trait UpdateCertificateTrait
{
    /**
     * @param UpdateCertificateRequest $args
     * @return UpdateCertificateResponse
     */
    public function updateCertificate(UpdateCertificateRequest $args)
    {
        $result = parent::updateCertificate($args->toArray());
        return new UpdateCertificateResponse($result->toArray());
    }
}
