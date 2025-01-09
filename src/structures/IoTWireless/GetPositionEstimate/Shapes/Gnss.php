<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Payload
 * @property float $CaptureTime
 * @property float $CaptureTimeAccuracy
 * @property list<float> $AssistPosition
 * @property float $AssistAltitude
 * @property bool $Use2DSolver
 */
class Gnss extends Shape
{
    /**
     * @param array{
     *     Payload: string,
     *     CaptureTime?: float,
     *     CaptureTimeAccuracy?: float,
     *     AssistPosition?: list<float>,
     *     AssistAltitude?: float,
     *     Use2DSolver?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
