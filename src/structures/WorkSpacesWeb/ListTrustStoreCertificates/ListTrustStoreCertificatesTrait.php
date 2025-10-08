<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListTrustStoreCertificates;

trait ListTrustStoreCertificatesTrait
{
    /**
     * @param ListTrustStoreCertificatesRequest $args
     * @return ListTrustStoreCertificatesResponse
     */
    public function listTrustStoreCertificates(ListTrustStoreCertificatesRequest $args)
    {
        $result = parent::listTrustStoreCertificates($args->toArray());
        return new ListTrustStoreCertificatesResponse($result->toArray());
    }
}
