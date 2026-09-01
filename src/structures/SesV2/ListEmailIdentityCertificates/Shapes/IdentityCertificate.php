<?php

namespace Sunaoka\Aws\Structures\SesV2\ListEmailIdentityCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FromAddress
 * @property 'PROVISIONING'|'INACTIVE'|'DEPROVISIONING'|'ACTIVE'|'FAILED'|null $Status
 * @property string|null $CertificateArn
 * @property \Aws\Api\DateTimeResult|null $CertificateExpiryTime
 */
class IdentityCertificate extends Shape
{
    /**
     * @param array{
     *     FromAddress?: string|null,
     *     Status?: 'PROVISIONING'|'INACTIVE'|'DEPROVISIONING'|'ACTIVE'|'FAILED'|null,
     *     CertificateArn?: string|null,
     *     CertificateExpiryTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
