<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $BlackDetectThreshold
 * @property int $VideoBlackThresholdMsec
 */
class VideoBlackFailoverSettings extends Shape
{
    /**
     * @param array{
     *     BlackDetectThreshold?: double,
     *     VideoBlackThresholdMsec?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
