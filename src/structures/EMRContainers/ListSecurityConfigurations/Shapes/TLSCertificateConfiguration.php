<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListSecurityConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PEM'|null $certificateProviderType
 * @property string|null $publicCertificateSecretArn
 * @property string|null $privateCertificateSecretArn
 */
class TLSCertificateConfiguration extends Shape
{
    /**
     * @param array{
     *     certificateProviderType?: 'PEM'|null,
     *     publicCertificateSecretArn?: string|null,
     *     privateCertificateSecretArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
