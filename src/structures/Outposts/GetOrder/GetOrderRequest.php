<?php

namespace Sunaoka\Aws\Structures\Outposts\GetOrder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrderId
 */
class GetOrderRequest extends Request
{
    /**
     * @param array{OrderId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
