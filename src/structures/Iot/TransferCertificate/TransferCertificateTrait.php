<?php

namespace Sunaoka\Aws\Structures\Iot\TransferCertificate;

trait TransferCertificateTrait
{
    /**
     * @param TransferCertificateRequest $args
     * @return TransferCertificateResponse
     */
    public function transferCertificate(TransferCertificateRequest $args)
    {
        $result = parent::transferCertificate($args->toArray());
        return new TransferCertificateResponse($result->toArray());
    }
}
