<?php

namespace Sunaoka\Aws\Structures\Acm\DescribeCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $CertificateTransparencyLoggingPreference
 * @property 'ENABLED'|'DISABLED'|null $Export
 */
class CertificateOptions extends Shape
{
    /**
     * @param array{
     *     CertificateTransparencyLoggingPreference?: 'ENABLED'|'DISABLED'|null,
     *     Export?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
