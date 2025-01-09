<?php

namespace Sunaoka\Aws\Structures\EventBridge\DeleteEventBus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteEventBusRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
