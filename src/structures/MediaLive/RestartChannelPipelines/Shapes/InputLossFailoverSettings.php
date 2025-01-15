<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<100, max>|null $InputLossThresholdMsec
 */
class InputLossFailoverSettings extends Shape
{
    /**
     * @param array{InputLossThresholdMsec?: int<100, max>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
