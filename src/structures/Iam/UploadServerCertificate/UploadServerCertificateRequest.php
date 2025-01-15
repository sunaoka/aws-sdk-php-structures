<?php

namespace Sunaoka\Aws\Structures\Iam\UploadServerCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Path
 * @property string $ServerCertificateName
 * @property string $CertificateBody
 * @property string $PrivateKey
 * @property string|null $CertificateChain
 * @property list<Shapes\Tag>|null $Tags
 */
class UploadServerCertificateRequest extends Request
{
    /**
     * @param array{
     *     Path?: string|null,
     *     ServerCertificateName: string,
     *     CertificateBody: string,
     *     PrivateKey: string,
     *     CertificateChain?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
