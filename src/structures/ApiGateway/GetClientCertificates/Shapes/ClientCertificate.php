<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetClientCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clientCertificateId
 * @property string $description
 * @property string $pemEncodedCertificate
 * @property \Aws\Api\DateTimeResult $createdDate
 * @property \Aws\Api\DateTimeResult $expirationDate
 * @property array<string, string> $tags
 */
class ClientCertificate extends Shape
{
    /**
     * @param array{
     *     clientCertificateId?: string,
     *     description?: string,
     *     pemEncodedCertificate?: string,
     *     createdDate?: \Aws\Api\DateTimeResult,
     *     expirationDate?: \Aws\Api\DateTimeResult,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
