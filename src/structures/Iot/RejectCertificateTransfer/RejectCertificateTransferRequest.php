<?php

namespace Sunaoka\Aws\Structures\Iot\RejectCertificateTransfer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $certificateId
 * @property string|null $rejectReason
 */
class RejectCertificateTransferRequest extends Request
{
    /**
     * @param array{
     *     certificateId: string,
     *     rejectReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
