<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\GetSubject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $seenAt
 * @property string|null $serialNumber
 * @property string|null $issuer
 * @property bool|null $enabled
 * @property string|null $x509CertificateData
 * @property bool|null $failed
 */
class CredentialSummary extends Shape
{
    /**
     * @param array{
     *     seenAt?: \Aws\Api\DateTimeResult|null,
     *     serialNumber?: string|null,
     *     issuer?: string|null,
     *     enabled?: bool|null,
     *     x509CertificateData?: string|null,
     *     failed?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
