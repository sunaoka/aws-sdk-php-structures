<?php

namespace Sunaoka\Aws\Structures\SnowBall\DescribeAddress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AddressId
 */
class DescribeAddressRequest extends Request
{
    /**
     * @param array{AddressId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
