<?php

namespace Sunaoka\Aws\Structures\Iam\ListSigningCertificates;

trait ListSigningCertificatesTrait
{
    /**
     * @param ListSigningCertificatesRequest $args
     * @return ListSigningCertificatesResponse
     */
    public function listSigningCertificates(ListSigningCertificatesRequest $args)
    {
        $result = parent::listSigningCertificates($args->toArray());
        return new ListSigningCertificatesResponse($result->toArray());
    }
}
