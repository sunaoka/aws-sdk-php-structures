<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeCACertificate;

trait DescribeCACertificateTrait
{
    /**
     * @param DescribeCACertificateRequest $args
     * @return DescribeCACertificateResponse
     */
    public function describeCACertificate(DescribeCACertificateRequest $args)
    {
        $result = parent::describeCACertificate($args->toArray());
        return new DescribeCACertificateResponse($result->toArray());
    }
}
