<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteCACertificate;

trait DeleteCACertificateTrait
{
    /**
     * @param DeleteCACertificateRequest $args
     * @return DeleteCACertificateResponse
     */
    public function deleteCACertificate(DeleteCACertificateRequest $args)
    {
        $result = parent::deleteCACertificate($args->toArray());
        return new DeleteCACertificateResponse($result->toArray());
    }
}
