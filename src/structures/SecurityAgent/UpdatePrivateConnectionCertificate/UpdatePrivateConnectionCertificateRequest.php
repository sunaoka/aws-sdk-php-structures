<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdatePrivateConnectionCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $privateConnectionName
 * @property string $certificate
 */
class UpdatePrivateConnectionCertificateRequest extends Request
{
    /**
     * @param array{
     *     privateConnectionName: string,
     *     certificate: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
