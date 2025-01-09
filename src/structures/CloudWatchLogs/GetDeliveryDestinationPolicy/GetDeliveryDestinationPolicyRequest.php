<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetDeliveryDestinationPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deliveryDestinationName
 */
class GetDeliveryDestinationPolicyRequest extends Request
{
    /**
     * @param array{deliveryDestinationName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
