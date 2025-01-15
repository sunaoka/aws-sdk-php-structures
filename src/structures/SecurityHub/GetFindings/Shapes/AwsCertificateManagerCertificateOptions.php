<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CertificateTransparencyLoggingPreference
 */
class AwsCertificateManagerCertificateOptions extends Shape
{
    /**
     * @param array{CertificateTransparencyLoggingPreference?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
