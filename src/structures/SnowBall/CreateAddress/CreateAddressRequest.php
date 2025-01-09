<?php

namespace Sunaoka\Aws\Structures\SnowBall\CreateAddress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Address $Address
 */
class CreateAddressRequest extends Request
{
    /**
     * @param array{Address: Shapes\Address} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
