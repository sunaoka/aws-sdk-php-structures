<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListSecurityConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TLSCertificateConfiguration $tlsCertificateConfiguration
 */
class InTransitEncryptionConfiguration extends Shape
{
    /**
     * @param array{tlsCertificateConfiguration?: TLSCertificateConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
