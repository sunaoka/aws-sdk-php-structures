<?php

namespace Sunaoka\Aws\Structures\Iot\ListCertificateProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $certificateProviderName
 * @property string|null $certificateProviderArn
 */
class CertificateProviderSummary extends Shape
{
    /**
     * @param array{
     *     certificateProviderName?: string|null,
     *     certificateProviderArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
