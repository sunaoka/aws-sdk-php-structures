<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $CaptureInterval
 * @property 'MILLISECONDS'|'SECONDS' $CaptureIntervalUnits
 * @property TimecodeBurninSettings $TimecodeBurninSettings
 */
class FrameCaptureSettings extends Shape
{
    /**
     * @param array{
     *     CaptureInterval?: int,
     *     CaptureIntervalUnits?: 'MILLISECONDS'|'SECONDS',
     *     TimecodeBurninSettings?: TimecodeBurninSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
