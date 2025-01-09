<?php

namespace Sunaoka\Aws\Structures\Iot\AcceptCertificateTransfer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $certificateId
 * @property bool $setAsActive
 */
class AcceptCertificateTransferRequest extends Request
{
    /**
     * @param array{
     *     certificateId: string,
     *     setAsActive?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
