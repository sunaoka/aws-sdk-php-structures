<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeCertificates;

trait DescribeCertificatesTrait
{
    /**
     * @param DescribeCertificatesRequest $args
     * @return DescribeCertificatesResponse
     */
    public function describeCertificates(DescribeCertificatesRequest $args)
    {
        $result = parent::describeCertificates($args->toArray());
        return new DescribeCertificatesResponse($result->toArray());
    }
}
