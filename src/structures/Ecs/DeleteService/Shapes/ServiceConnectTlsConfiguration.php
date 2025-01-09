<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServiceConnectTlsCertificateAuthority $issuerCertificateAuthority
 * @property string $kmsKey
 * @property string $roleArn
 */
class ServiceConnectTlsConfiguration extends Shape
{
    /**
     * @param array{
     *     issuerCertificateAuthority: ServiceConnectTlsCertificateAuthority,
     *     kmsKey?: string,
     *     roleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
