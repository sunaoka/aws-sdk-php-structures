<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\GetInternetEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventId
 */
class GetInternetEventRequest extends Request
{
    /**
     * @param array{EventId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
