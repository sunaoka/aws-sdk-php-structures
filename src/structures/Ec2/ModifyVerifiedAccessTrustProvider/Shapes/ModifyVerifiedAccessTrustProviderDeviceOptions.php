<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVerifiedAccessTrustProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PublicSigningKeyUrl
 */
class ModifyVerifiedAccessTrustProviderDeviceOptions extends Shape
{
    /**
     * @param array{PublicSigningKeyUrl?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
