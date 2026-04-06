<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeCertificateProvider;

trait DescribeCertificateProviderTrait
{
    /**
     * @param DescribeCertificateProviderRequest $args
     * @return DescribeCertificateProviderResponse
     */
    public function describeCertificateProvider(DescribeCertificateProviderRequest $args)
    {
        $result = parent::describeCertificateProvider($args->toArray());
        return new DescribeCertificateProviderResponse($result->toArray());
    }
}
