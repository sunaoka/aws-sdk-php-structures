<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\PutLoggingOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CloudWatchLogDeliveryOptions $cloudWatchLogDelivery
 */
class PutLoggingOptionsRequest extends Request
{
    /**
     * @param array{cloudWatchLogDelivery: Shapes\CloudWatchLogDeliveryOptions} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
