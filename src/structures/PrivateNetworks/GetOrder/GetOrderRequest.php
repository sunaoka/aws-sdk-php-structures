<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\GetOrder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $orderArn
 */
class GetOrderRequest extends Request
{
    /**
     * @param array{orderArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
