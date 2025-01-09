<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DeprovisionByoipCidr;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Cidr
 */
class DeprovisionByoipCidrRequest extends Request
{
    /**
     * @param array{Cidr: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
