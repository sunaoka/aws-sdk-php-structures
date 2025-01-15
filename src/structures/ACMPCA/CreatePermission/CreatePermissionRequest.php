<?php

namespace Sunaoka\Aws\Structures\ACMPCA\CreatePermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateAuthorityArn
 * @property string $Principal
 * @property string|null $SourceAccount
 * @property list<'IssueCertificate'|'GetCertificate'|'ListPermissions'> $Actions
 */
class CreatePermissionRequest extends Request
{
    /**
     * @param array{
     *     CertificateAuthorityArn: string,
     *     Principal: string,
     *     SourceAccount?: string|null,
     *     Actions: list<'IssueCertificate'|'GetCertificate'|'ListPermissions'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
