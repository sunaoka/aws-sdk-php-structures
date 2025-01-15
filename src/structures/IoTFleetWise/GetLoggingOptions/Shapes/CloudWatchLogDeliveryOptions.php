<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetLoggingOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OFF'|'ERROR' $logType
 * @property string|null $logGroupName
 */
class CloudWatchLogDeliveryOptions extends Shape
{
    /**
     * @param array{
     *     logType: 'OFF'|'ERROR',
     *     logGroupName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
