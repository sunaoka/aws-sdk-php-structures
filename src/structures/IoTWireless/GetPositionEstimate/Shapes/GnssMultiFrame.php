<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GnssCapture> $Captures
 * @property float|null $CaptureTimeAccuracy
 * @property list<float>|null $AssistPosition
 * @property float|null $AssistAltitude
 * @property bool|null $Use2DSolver
 */
class GnssMultiFrame extends Shape
{
    /**
     * @param array{
     *     Captures: list<GnssCapture>,
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
