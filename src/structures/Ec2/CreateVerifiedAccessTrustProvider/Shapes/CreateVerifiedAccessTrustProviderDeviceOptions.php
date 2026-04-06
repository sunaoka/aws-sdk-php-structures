<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVerifiedAccessTrustProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TenantId
 * @property string|null $PublicSigningKeyUrl
 */
class CreateVerifiedAccessTrustProviderDeviceOptions extends Shape
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
