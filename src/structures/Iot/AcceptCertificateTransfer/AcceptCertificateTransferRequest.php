<?php

namespace Sunaoka\Aws\Structures\Iot\AcceptCertificateTransfer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $certificateId
 * @property bool|null $setAsActive
 */
class AcceptCertificateTransferRequest extends Request
{
    /**
     * @param array{
     *     certificateId: string,
     *     setAsActive?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
