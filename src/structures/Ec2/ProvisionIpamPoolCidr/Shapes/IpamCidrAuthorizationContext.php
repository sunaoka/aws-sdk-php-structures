<?php

namespace Sunaoka\Aws\Structures\Ec2\ProvisionIpamPoolCidr\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Message
 * @property string $Signature
 */
class IpamCidrAuthorizationContext extends Shape
{
    /**
     * @param array{
     *     Message?: string,
     *     Signature?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
