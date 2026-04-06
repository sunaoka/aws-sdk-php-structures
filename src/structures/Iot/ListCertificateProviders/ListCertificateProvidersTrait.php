<?php

namespace Sunaoka\Aws\Structures\Iot\ListCertificateProviders;

trait ListCertificateProvidersTrait
{
    /**
     * @param ListCertificateProvidersRequest $args
     * @return ListCertificateProvidersResponse
     */
    public function listCertificateProviders(ListCertificateProvidersRequest $args)
    {
        $result = parent::listCertificateProviders($args->toArray());
        return new ListCertificateProvidersResponse($result->toArray());
    }
}
