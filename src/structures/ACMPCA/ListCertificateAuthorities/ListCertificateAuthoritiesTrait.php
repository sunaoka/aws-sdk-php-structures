<?php

namespace Sunaoka\Aws\Structures\ACMPCA\ListCertificateAuthorities;

trait ListCertificateAuthoritiesTrait
{
    /**
     * @param ListCertificateAuthoritiesRequest $args
     * @return ListCertificateAuthoritiesResponse
     */
    public function listCertificateAuthorities(ListCertificateAuthoritiesRequest $args)
    {
        $result = parent::listCertificateAuthorities($args->toArray());
        return new ListCertificateAuthoritiesResponse($result->toArray());
    }
}
