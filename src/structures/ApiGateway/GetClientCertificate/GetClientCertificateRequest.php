<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetClientCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientCertificateId
 */
class GetClientCertificateRequest extends Request
{
    /**
     * @param array{clientCertificateId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
