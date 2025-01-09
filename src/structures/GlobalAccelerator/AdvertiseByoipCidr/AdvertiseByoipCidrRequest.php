<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\AdvertiseByoipCidr;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Cidr
 */
class AdvertiseByoipCidrRequest extends Request
{
    /**
     * @param array{Cidr: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
