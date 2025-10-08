<?php

namespace Sunaoka\Aws\Structures\Iot\ListCertificatesByCA;

trait ListCertificatesByCATrait
{
    /**
     * @param ListCertificatesByCARequest $args
     * @return ListCertificatesByCAResponse
     */
    public function listCertificatesByCA(ListCertificatesByCARequest $args)
    {
        $result = parent::listCertificatesByCA($args->toArray());
        return new ListCertificatesByCAResponse($result->toArray());
    }
}
