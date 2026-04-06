<?php

namespace Sunaoka\Aws\Structures\Iot\CreateCertificateProvider;

trait CreateCertificateProviderTrait
{
    /**
     * @param CreateCertificateProviderRequest $args
     * @return CreateCertificateProviderResponse
     */
    public function createCertificateProvider(CreateCertificateProviderRequest $args)
    {
        $result = parent::createCertificateProvider($args->toArray());
        return new CreateCertificateProviderResponse($result->toArray());
    }
}
