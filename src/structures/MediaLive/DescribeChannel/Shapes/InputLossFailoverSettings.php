<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<100, max> $InputLossThresholdMsec
 */
class InputLossFailoverSettings extends Shape
{
    /**
     * @param array{InputLossThresholdMsec?: int<100, max>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
