<?php

namespace Sunaoka\Aws\Structures\Iam\UploadSigningCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UserName
 * @property string $CertificateBody
 */
class UploadSigningCertificateRequest extends Request
{
    /**
     * @param array{
     *     UserName?: string|null,
     *     CertificateBody: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
