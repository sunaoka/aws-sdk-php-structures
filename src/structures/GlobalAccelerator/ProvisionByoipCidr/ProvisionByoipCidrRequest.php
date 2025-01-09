<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ProvisionByoipCidr;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Cidr
 * @property Shapes\CidrAuthorizationContext $CidrAuthorizationContext
 */
class ProvisionByoipCidrRequest extends Request
{
    /**
     * @param array{
     *     Cidr: string,
     *     CidrAuthorizationContext: Shapes\CidrAuthorizationContext
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
