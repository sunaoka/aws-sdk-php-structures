<?php

namespace Sunaoka\Aws\Structures\Iam\GetServerCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServerCertificateMetadata $ServerCertificateMetadata
 * @property string $CertificateBody
 * @property string $CertificateChain
 * @property list<Tag> $Tags
 */
class ServerCertificate extends Shape
{
    /**
     * @param array{
     *     ServerCertificateMetadata: ServerCertificateMetadata,
     *     CertificateBody: string,
     *     CertificateChain?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
