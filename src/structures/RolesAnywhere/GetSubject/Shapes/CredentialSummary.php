<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\GetSubject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $enabled
 * @property bool|null $failed
 * @property string|null $issuer
 * @property \Aws\Api\DateTimeResult|null $seenAt
 * @property string|null $serialNumber
 * @property string|null $x509CertificateData
 */
class CredentialSummary extends Shape
{
    /**
     * @param array{
     *     enabled?: bool|null,
     *     failed?: bool|null,
     *     issuer?: string|null,
     *     seenAt?: \Aws\Api\DateTimeResult|null,
     *     serialNumber?: string|null,
     *     x509CertificateData?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
