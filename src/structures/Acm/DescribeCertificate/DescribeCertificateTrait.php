<?php

namespace Sunaoka\Aws\Structures\Acm\DescribeCertificate;

trait DescribeCertificateTrait
{
    /**
     * @param DescribeCertificateRequest $args
     * @return DescribeCertificateResponse
     */
    public function describeCertificate(DescribeCertificateRequest $args)
    {
        $result = parent::describeCertificate($args->toArray());
        return new DescribeCertificateResponse($result->toArray());
    }
}
