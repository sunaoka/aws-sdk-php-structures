<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteDeliveryDestinationPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deliveryDestinationName
 */
class DeleteDeliveryDestinationPolicyRequest extends Request
{
    /**
     * @param array{deliveryDestinationName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
