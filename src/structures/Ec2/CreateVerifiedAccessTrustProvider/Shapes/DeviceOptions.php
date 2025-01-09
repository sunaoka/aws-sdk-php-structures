<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVerifiedAccessTrustProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TenantId
 * @property string $PublicSigningKeyUrl
 */
class DeviceOptions extends Shape
{
    /**
     * @param array{
     *     TenantId?: string,
     *     PublicSigningKeyUrl?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
