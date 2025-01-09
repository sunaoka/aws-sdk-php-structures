<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 3600000> $CaptureInterval
 * @property 'MILLISECONDS'|'SECONDS' $CaptureIntervalUnits
 * @property TimecodeBurninSettings $TimecodeBurninSettings
 */
class FrameCaptureSettings extends Shape
{
    /**
     * @param array{
     *     CaptureInterval?: int<1, 3600000>,
     *     CaptureIntervalUnits?: 'MILLISECONDS'|'SECONDS',
     *     TimecodeBurninSettings?: TimecodeBurninSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
