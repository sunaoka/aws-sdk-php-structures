<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $CaptureInterval
 * @property 'MILLISECONDS'|'SECONDS'|null $CaptureIntervalUnits
 * @property TimecodeBurninSettings|null $TimecodeBurninSettings
 */
class FrameCaptureSettings extends Shape
{
    /**
     * @param array{
     *     CaptureInterval?: int|null,
     *     CaptureIntervalUnits?: 'MILLISECONDS'|'SECONDS'|null,
     *     TimecodeBurninSettings?: TimecodeBurninSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
