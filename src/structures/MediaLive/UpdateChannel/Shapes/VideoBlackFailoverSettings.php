<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $BlackDetectThreshold
 * @property int|null $VideoBlackThresholdMsec
 */
class VideoBlackFailoverSettings extends Shape
{
    /**
     * @param array{
     *     BlackDetectThreshold?: double|null,
     *     VideoBlackThresholdMsec?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
