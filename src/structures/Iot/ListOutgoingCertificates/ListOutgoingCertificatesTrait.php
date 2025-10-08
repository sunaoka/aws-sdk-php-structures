<?php

namespace Sunaoka\Aws\Structures\Iot\ListOutgoingCertificates;

trait ListOutgoingCertificatesTrait
{
    /**
     * @param ListOutgoingCertificatesRequest $args
     * @return ListOutgoingCertificatesResponse
     */
    public function listOutgoingCertificates(ListOutgoingCertificatesRequest $args)
    {
        $result = parent::listOutgoingCertificates($args->toArray());
        return new ListOutgoingCertificatesResponse($result->toArray());
    }
}
