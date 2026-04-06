<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutDeliveryDestinationPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deliveryDestinationName
 * @property string $deliveryDestinationPolicy
 */
class PutDeliveryDestinationPolicyRequest extends Request
{
    /**
     * @param array{
     *     deliveryDestinationName: string,
     *     deliveryDestinationPolicy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
