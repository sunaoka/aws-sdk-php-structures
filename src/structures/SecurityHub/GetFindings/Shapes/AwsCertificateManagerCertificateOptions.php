<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertificateTransparencyLoggingPreference
 */
class AwsCertificateManagerCertificateOptions extends Shape
{
    /**
     * @param array{CertificateTransparencyLoggingPreference?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
