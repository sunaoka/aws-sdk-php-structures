<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $InputLossThresholdMsec
 */
class InputLossFailoverSettings extends Shape
{
    /**
     * @param array{InputLossThresholdMsec?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
