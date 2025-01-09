<?php

namespace Sunaoka\Aws\Structures\ApiGateway\DeleteClientCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientCertificateId
 */
class DeleteClientCertificateRequest extends Request
{
    /**
     * @param array{clientCertificateId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
