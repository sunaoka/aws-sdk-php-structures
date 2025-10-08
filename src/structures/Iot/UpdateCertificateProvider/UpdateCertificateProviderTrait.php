<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateCertificateProvider;

trait UpdateCertificateProviderTrait
{
    /**
     * @param UpdateCertificateProviderRequest $args
     * @return UpdateCertificateProviderResponse
     */
    public function updateCertificateProvider(UpdateCertificateProviderRequest $args)
    {
        $result = parent::updateCertificateProvider($args->toArray());
        return new UpdateCertificateProviderResponse($result->toArray());
    }
}
