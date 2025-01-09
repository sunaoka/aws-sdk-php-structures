<?php

namespace Sunaoka\Aws\Structures\Iam\UploadSigningCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string $CertificateBody
 */
class UploadSigningCertificateRequest extends Request
{
    /**
     * @param array{
     *     UserName?: string,
     *     CertificateBody: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
