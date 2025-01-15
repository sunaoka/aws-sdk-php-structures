<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteTLSInspectionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CertificateArn
 * @property string|null $CertificateSerial
 * @property string|null $Status
 * @property string|null $StatusMessage
 */
class TlsCertificateData extends Shape
{
    /**
     * @param array{
     *     CertificateArn?: string|null,
     *     CertificateSerial?: string|null,
     *     Status?: string|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
