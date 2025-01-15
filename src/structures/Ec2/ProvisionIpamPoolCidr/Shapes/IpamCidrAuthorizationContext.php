<?php

namespace Sunaoka\Aws\Structures\Ec2\ProvisionIpamPoolCidr\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Message
 * @property string|null $Signature
 */
class IpamCidrAuthorizationContext extends Shape
{
    /**
     * @param array{
     *     Message?: string|null,
     *     Signature?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
