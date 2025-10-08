<?php

namespace Sunaoka\Aws\Structures\Iot\CancelCertificateTransfer;

trait CancelCertificateTransferTrait
{
    /**
     * @param CancelCertificateTransferRequest $args
     * @return void
     */
    public function cancelCertificateTransfer(CancelCertificateTransferRequest $args)
    {
        parent::cancelCertificateTransfer($args->toArray());
    }
}
