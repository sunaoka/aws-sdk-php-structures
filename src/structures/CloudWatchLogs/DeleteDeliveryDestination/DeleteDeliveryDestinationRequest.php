<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteDeliveryDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeleteDeliveryDestinationRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
