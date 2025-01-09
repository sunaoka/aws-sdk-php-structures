<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\GetSubject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property bool $failed
 * @property string $issuer
 * @property \Aws\Api\DateTimeResult $seenAt
 * @property string $serialNumber
 * @property string $x509CertificateData
 */
class CredentialSummary extends Shape
{
    /**
     * @param array{
     *     enabled?: bool,
     *     failed?: bool,
     *     issuer?: string,
     *     seenAt?: \Aws\Api\DateTimeResult,
     *     serialNumber?: string,
     *     x509CertificateData?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
