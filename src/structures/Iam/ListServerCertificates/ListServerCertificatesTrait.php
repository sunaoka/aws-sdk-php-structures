<?php

namespace Sunaoka\Aws\Structures\Iam\ListServerCertificates;

trait ListServerCertificatesTrait
{
    /**
     * @param ListServerCertificatesRequest $args
     * @return ListServerCertificatesResponse
     */
    public function listServerCertificates(ListServerCertificatesRequest $args)
    {
        $result = parent::listServerCertificates($args->toArray());
        return new ListServerCertificatesResponse($result->toArray());
    }
}
