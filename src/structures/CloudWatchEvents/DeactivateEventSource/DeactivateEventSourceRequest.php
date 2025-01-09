<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DeactivateEventSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeactivateEventSourceRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
