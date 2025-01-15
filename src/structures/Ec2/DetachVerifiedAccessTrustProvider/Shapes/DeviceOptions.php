<?php

namespace Sunaoka\Aws\Structures\Ec2\DetachVerifiedAccessTrustProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TenantId
 * @property string|null $PublicSigningKeyUrl
 */
class DeviceOptions extends Shape
{
    /**
     * @param array{
     *     TenantId?: string|null,
     *     PublicSigningKeyUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
