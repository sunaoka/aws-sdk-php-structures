<?php

namespace Sunaoka\Aws\Structures\Iot\TransferCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $certificateId
 * @property string $targetAwsAccount
 * @property string $transferMessage
 */
class TransferCertificateRequest extends Request
{
    /**
     * @param array{
     *     certificateId: string,
     *     targetAwsAccount: string,
     *     transferMessage?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
