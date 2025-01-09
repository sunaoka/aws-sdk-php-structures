<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $InputLossThresholdMsec
 */
class InputLossFailoverSettings extends Shape
{
    /**
     * @param array{InputLossThresholdMsec?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
