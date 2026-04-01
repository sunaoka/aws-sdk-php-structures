<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdatePrivateConnectionCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $certificate
 */
class UpdatePrivateConnectionCertificateRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     certificate: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
