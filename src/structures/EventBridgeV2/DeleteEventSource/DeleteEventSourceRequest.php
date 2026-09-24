<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\DeleteEventSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventSourceArn
 */
class DeleteEventSourceRequest extends Request
{
    /**
     * @param array{EventSourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
