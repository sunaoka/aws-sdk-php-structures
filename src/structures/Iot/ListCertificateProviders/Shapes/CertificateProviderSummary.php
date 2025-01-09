<?php

namespace Sunaoka\Aws\Structures\Iot\ListCertificateProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $certificateProviderName
 * @property string $certificateProviderArn
 */
class CertificateProviderSummary extends Shape
{
    /**
     * @param array{
     *     certificateProviderName?: string,
     *     certificateProviderArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
