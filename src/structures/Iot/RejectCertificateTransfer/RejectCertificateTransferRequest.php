<?php

namespace Sunaoka\Aws\Structures\Iot\RejectCertificateTransfer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $certificateId
 * @property string $rejectReason
 */
class RejectCertificateTransferRequest extends Request
{
    /**
     * @param array{
     *     certificateId: string,
     *     rejectReason?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
