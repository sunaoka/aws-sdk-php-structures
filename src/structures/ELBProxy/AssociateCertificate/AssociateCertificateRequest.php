<?php

namespace Sunaoka\Aws\Structures\ELBProxy\AssociateCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $proxyIdentifier
 * @property string $certificateIdentifier
 */
class AssociateCertificateRequest extends Request
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
