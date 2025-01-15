<?php

namespace Sunaoka\Aws\Structures\Iam\GetServerCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServerCertificateMetadata $ServerCertificateMetadata
 * @property string $CertificateBody
 * @property string|null $CertificateChain
 * @property list<Tag>|null $Tags
 */
class ServerCertificate extends Shape
{
    /**
     * @param array{
     *     ServerCertificateMetadata: ServerCertificateMetadata,
     *     CertificateBody: string,
     *     CertificateChain?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
