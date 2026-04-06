<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $BlackDetectThreshold
 * @property int<1000, max>|null $VideoBlackThresholdMsec
 */
class VideoBlackFailoverSettings extends Shape
{
    /**
     * @param array{
     *     BlackDetectThreshold?: double|null,
     *     VideoBlackThresholdMsec?: int<1000, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
