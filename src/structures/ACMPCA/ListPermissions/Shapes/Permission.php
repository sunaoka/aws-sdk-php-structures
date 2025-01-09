<?php

namespace Sunaoka\Aws\Structures\ACMPCA\ListPermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertificateAuthorityArn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $Principal
 * @property string $SourceAccount
 * @property list<'IssueCertificate'|'GetCertificate'|'ListPermissions'> $Actions
 * @property string $Policy
 */
class Permission extends Shape
{
    /**
     * @param array{
     *     CertificateAuthorityArn?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     Principal?: string,
     *     SourceAccount?: string,
     *     Actions?: list<'IssueCertificate'|'GetCertificate'|'ListPermissions'>,
     *     Policy?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
