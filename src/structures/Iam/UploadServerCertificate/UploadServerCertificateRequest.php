<?php

namespace Sunaoka\Aws\Structures\Iam\UploadServerCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Path
 * @property string $ServerCertificateName
 * @property string $CertificateBody
 * @property string $PrivateKey
 * @property string $CertificateChain
 * @property list<Shapes\Tag> $Tags
 */
class UploadServerCertificateRequest extends Request
{
    /**
     * @param array{
     *     Path?: string,
     *     ServerCertificateName: string,
     *     CertificateBody: string,
     *     PrivateKey: string,
     *     CertificateChain?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
