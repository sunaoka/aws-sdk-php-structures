<?php

namespace Sunaoka\Aws\Structures\EventBridge\ActivateEventSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class ActivateEventSourceRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
