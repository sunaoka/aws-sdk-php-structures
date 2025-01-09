<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeSecurityConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PEM' $certificateProviderType
 * @property string $publicCertificateSecretArn
 * @property string $privateCertificateSecretArn
 */
class TLSCertificateConfiguration extends Shape
{
    /**
     * @param array{
     *     certificateProviderType?: 'PEM',
     *     publicCertificateSecretArn?: string,
     *     privateCertificateSecretArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
