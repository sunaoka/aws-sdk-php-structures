<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Payload
 * @property float|null $CaptureTime
 */
class GnssCapture extends Shape
{
    /**
     * @param array{
     *     Payload: string,
     *     CaptureTime?: float|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
