<?php

namespace Sunaoka\Aws\Structures\Iot\RejectCertificateTransfer;

trait RejectCertificateTransferTrait
{
    /**
     * @param RejectCertificateTransferRequest $args
     * @return void
     */
    public function rejectCertificateTransfer(RejectCertificateTransferRequest $args)
    {
        parent::rejectCertificateTransfer($args->toArray());
    }
}
