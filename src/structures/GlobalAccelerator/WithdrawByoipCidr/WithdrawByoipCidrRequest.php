<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\WithdrawByoipCidr;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Cidr
 */
class WithdrawByoipCidrRequest extends Request
{
    /**
     * @param array{Cidr: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
