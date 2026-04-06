<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteCertificateProvider;

trait DeleteCertificateProviderTrait
{
    /**
     * @param DeleteCertificateProviderRequest $args
     * @return DeleteCertificateProviderResponse
     */
    public function deleteCertificateProvider(DeleteCertificateProviderRequest $args)
    {
        $result = parent::deleteCertificateProvider($args->toArray());
        return new DeleteCertificateProviderResponse($result->toArray());
    }
}
