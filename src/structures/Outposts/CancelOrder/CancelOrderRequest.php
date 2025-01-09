<?php

namespace Sunaoka\Aws\Structures\Outposts\CancelOrder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrderId
 */
class CancelOrderRequest extends Request
{
    /**
     * @param array{OrderId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
