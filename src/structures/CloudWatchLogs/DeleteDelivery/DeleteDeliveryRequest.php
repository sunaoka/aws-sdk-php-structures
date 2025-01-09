<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteDelivery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class DeleteDeliveryRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
