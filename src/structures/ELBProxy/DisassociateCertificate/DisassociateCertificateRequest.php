<?php

namespace Sunaoka\Aws\Structures\ELBProxy\DisassociateCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $proxyIdentifier
 * @property string $certificateIdentifier
 */
class DisassociateCertificateRequest extends Request
{
    /**
     * @param array{
     *     proxyIdentifier: string,
     *     certificateIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
