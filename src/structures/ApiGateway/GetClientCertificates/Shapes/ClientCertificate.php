<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetClientCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $clientCertificateId
 * @property string|null $description
 * @property string|null $pemEncodedCertificate
 * @property \Aws\Api\DateTimeResult|null $createdDate
 * @property \Aws\Api\DateTimeResult|null $expirationDate
 * @property array<string, string>|null $tags
 */
class ClientCertificate extends Shape
{
    /**
     * @param array{
     *     clientCertificateId?: string|null,
     *     description?: string|null,
     *     pemEncodedCertificate?: string|null,
     *     createdDate?: \Aws\Api\DateTimeResult|null,
     *     expirationDate?: \Aws\Api\DateTimeResult|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
