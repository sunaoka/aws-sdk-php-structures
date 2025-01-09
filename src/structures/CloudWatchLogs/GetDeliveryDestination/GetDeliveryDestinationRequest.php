<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetDeliveryDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class GetDeliveryDestinationRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
