<?php

namespace Sunaoka\Aws\Structures\ACMPCA\DeletePermission;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CertificateAuthorityArn
 * @property string $Principal
 * @property string|null $SourceAccount
 */
class DeletePermissionRequest extends Request
{
    /**
     * @param array{
     *     CertificateAuthorityArn: string,
     *     Principal: string,
     *     SourceAccount?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
