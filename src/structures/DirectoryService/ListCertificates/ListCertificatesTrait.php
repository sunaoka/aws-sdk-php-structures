<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ListCertificates;

trait ListCertificatesTrait
{
    /**
     * @param ListCertificatesRequest $args
     * @return ListCertificatesResponse
     */
    public function listCertificates(ListCertificatesRequest $args)
    {
        $result = parent::listCertificates($args->toArray());
        return new ListCertificatesResponse($result->toArray());
    }
}
