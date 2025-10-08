<?php

namespace Sunaoka\Aws\Structures\Iot\AcceptCertificateTransfer;

trait AcceptCertificateTransferTrait
{
    /**
     * @param AcceptCertificateTransferRequest $args
     * @return void
     */
    public function acceptCertificateTransfer(AcceptCertificateTransferRequest $args)
    {
        parent::acceptCertificateTransfer($args->toArray());
    }
}
