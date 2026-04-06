<?php

namespace Sunaoka\Aws\Structures\WorkLink\ListWebsiteCertificateAuthorities;

trait ListWebsiteCertificateAuthoritiesTrait
{
    /**
     * @param ListWebsiteCertificateAuthoritiesRequest $args
     * @return ListWebsiteCertificateAuthoritiesResponse
     */
    public function listWebsiteCertificateAuthorities(ListWebsiteCertificateAuthoritiesRequest $args)
    {
        $result = parent::listWebsiteCertificateAuthorities($args->toArray());
        return new ListWebsiteCertificateAuthoritiesResponse($result->toArray());
    }
}
