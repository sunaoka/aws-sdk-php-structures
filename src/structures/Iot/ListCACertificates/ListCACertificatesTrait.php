<?php

namespace Sunaoka\Aws\Structures\Iot\ListCACertificates;

trait ListCACertificatesTrait
{
    /**
     * @param ListCACertificatesRequest $args
     * @return ListCACertificatesResponse
     */
    public function listCACertificates(ListCACertificatesRequest $args)
    {
        $result = parent::listCACertificates($args->toArray());
        return new ListCACertificatesResponse($result->toArray());
    }
}
