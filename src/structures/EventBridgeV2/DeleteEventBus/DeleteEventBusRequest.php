<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\DeleteEventBus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventBusArn
 */
class DeleteEventBusRequest extends Request
{
    /**
     * @param array{EventBusArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
