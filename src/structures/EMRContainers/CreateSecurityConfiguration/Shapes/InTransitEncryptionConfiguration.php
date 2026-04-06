<?php

namespace Sunaoka\Aws\Structures\EMRContainers\CreateSecurityConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TLSCertificateConfiguration|null $tlsCertificateConfiguration
 */
class InTransitEncryptionConfiguration extends Shape
{
    /**
     * @param array{tlsCertificateConfiguration?: TLSCertificateConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
