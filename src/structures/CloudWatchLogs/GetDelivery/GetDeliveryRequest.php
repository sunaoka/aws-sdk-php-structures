<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetDelivery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class GetDeliveryRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
