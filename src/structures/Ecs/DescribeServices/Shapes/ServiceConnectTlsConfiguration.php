<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ServiceConnectTlsCertificateAuthority $issuerCertificateAuthority
 * @property string|null $kmsKey
 * @property string|null $roleArn
 */
class ServiceConnectTlsConfiguration extends Shape
{
    /**
     * @param array{
     *     issuerCertificateAuthority: ServiceConnectTlsCertificateAuthority,
     *     kmsKey?: string|null,
     *     roleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
