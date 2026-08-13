<?php

namespace Sunaoka\Aws\Structures\Acm\RequestCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $CertificateTransparencyLoggingPreference
 * @property 'ENABLED'|'DISABLED'|null $Export
 * @property 'EMAIL'|'DNS'|'HTTP'|null $ValidationMethod
 */
class CertificateOptions extends Shape
{
    /**
     * @param array{
     *     CertificateTransparencyLoggingPreference?: 'ENABLED'|'DISABLED'|null,
     *     Export?: 'ENABLED'|'DISABLED'|null,
     *     ValidationMethod?: 'EMAIL'|'DNS'|'HTTP'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
