<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteSigningCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UserName
 * @property string $CertificateId
 */
class DeleteSigningCertificateRequest extends Request
{
    /**
     * @param array{
     *     UserName?: string|null,
     *     CertificateId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
