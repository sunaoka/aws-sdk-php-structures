<?php

namespace Sunaoka\Aws\Structures\Ec2\ProvisionByoipCidr\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Message
 * @property string $Signature
 */
class CidrAuthorizationContext extends Shape
{
    /**
     * @param array{
     *     Message: string,
     *     Signature: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
