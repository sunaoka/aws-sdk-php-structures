<?php

namespace Sunaoka\Aws\Structures\SesV2\ListEmailIdentityCertificates;

trait ListEmailIdentityCertificatesTrait
{
    /**
     * @param ListEmailIdentityCertificatesRequest $args
     * @return ListEmailIdentityCertificatesResponse
     */
    public function listEmailIdentityCertificates(ListEmailIdentityCertificatesRequest $args)
    {
        $result = parent::listEmailIdentityCertificates($args->toArray());
        return new ListEmailIdentityCertificatesResponse($result->toArray());
    }
}
