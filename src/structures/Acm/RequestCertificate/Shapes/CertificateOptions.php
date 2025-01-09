<?php

namespace Sunaoka\Aws\Structures\Acm\RequestCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $CertificateTransparencyLoggingPreference
 */
class CertificateOptions extends Shape
{
    /**
     * @param array{CertificateTransparencyLoggingPreference?: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
