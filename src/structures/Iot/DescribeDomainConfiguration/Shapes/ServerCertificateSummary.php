<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeDomainConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serverCertificateArn
 * @property 'INVALID'|'VALID'|null $serverCertificateStatus
 * @property string|null $serverCertificateStatusDetail
 */
class ServerCertificateSummary extends Shape
{
    /**
     * @param array{
     *     serverCertificateArn?: string|null,
     *     serverCertificateStatus?: 'INVALID'|'VALID'|null,
     *     serverCertificateStatusDetail?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
