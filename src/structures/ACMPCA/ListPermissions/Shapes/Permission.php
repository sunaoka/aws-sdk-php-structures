<?php

namespace Sunaoka\Aws\Structures\ACMPCA\ListPermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CertificateAuthorityArn
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $Principal
 * @property string|null $SourceAccount
 * @property list<'IssueCertificate'|'GetCertificate'|'ListPermissions'>|null $Actions
 * @property string|null $Policy
 */
class Permission extends Shape
{
    /**
     * @param array{
     *     CertificateAuthorityArn?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     Principal?: string|null,
     *     SourceAccount?: string|null,
     *     Actions?: list<'IssueCertificate'|'GetCertificate'|'ListPermissions'>|null,
     *     Policy?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
