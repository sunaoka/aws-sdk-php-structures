<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $BlackDetectThreshold
 * @property int<1000, max> $VideoBlackThresholdMsec
 */
class VideoBlackFailoverSettings extends Shape
{
    /**
     * @param array{
     *     BlackDetectThreshold?: double,
     *     VideoBlackThresholdMsec?: int<1000, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
