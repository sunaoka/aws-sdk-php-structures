<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Payload
 * @property float|null $CaptureTime
 * @property float|null $CaptureTimeAccuracy
 * @property list<float>|null $AssistPosition
 * @property float|null $AssistAltitude
 * @property bool|null $Use2DSolver
 */
class Gnss extends Shape
{
    /**
     * @param array{
     *     Payload: string,
     *     CaptureTime?: float|null,
     *     CaptureTimeAccuracy?: float|null,
     *     AssistPosition?: list<float>|null,
     *     AssistAltitude?: float|null,
     *     Use2DSolver?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
