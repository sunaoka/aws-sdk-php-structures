<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeTLSInspectionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CertificateArn
 * @property string $CertificateSerial
 * @property string $Status
 * @property string $StatusMessage
 */
class TlsCertificateData extends Shape
{
    /**
     * @param array{
     *     CertificateArn?: string,
     *     CertificateSerial?: string,
     *     Status?: string,
     *     StatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
