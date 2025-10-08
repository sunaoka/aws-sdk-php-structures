<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListGroupCertificateAuthorities;

trait ListGroupCertificateAuthoritiesTrait
{
    /**
     * @param ListGroupCertificateAuthoritiesRequest $args
     * @return ListGroupCertificateAuthoritiesResponse
     */
    public function listGroupCertificateAuthorities(ListGroupCertificateAuthoritiesRequest $args)
    {
        $result = parent::listGroupCertificateAuthorities($args->toArray());
        return new ListGroupCertificateAuthoritiesResponse($result->toArray());
    }
}
