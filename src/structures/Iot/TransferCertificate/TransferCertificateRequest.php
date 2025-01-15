<?php

namespace Sunaoka\Aws\Structures\Iot\TransferCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $certificateId
 * @property string $targetAwsAccount
 * @property string|null $transferMessage
 */
class TransferCertificateRequest extends Request
{
    /**
     * @param array{
     *     certificateId: string,
     *     targetAwsAccount: string,
     *     transferMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
