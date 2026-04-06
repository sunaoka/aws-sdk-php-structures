<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\CreateDelivery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deliverySourceName
 * @property string $deliveryDestinationArn
 * @property array<string, string>|null $tags
 */
class CreateDeliveryRequest extends Request
{
    /**
     * @param array{
     *     deliverySourceName: string,
     *     deliveryDestinationArn: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
