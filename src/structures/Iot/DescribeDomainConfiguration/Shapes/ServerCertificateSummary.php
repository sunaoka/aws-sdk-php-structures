<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeDomainConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $serverCertificateArn
 * @property 'INVALID'|'VALID' $serverCertificateStatus
 * @property string $serverCertificateStatusDetail
 */
class ServerCertificateSummary extends Shape
{
    /**
     * @param array{
     *     serverCertificateArn?: string,
     *     serverCertificateStatus?: 'INVALID'|'VALID',
     *     serverCertificateStatusDetail?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
