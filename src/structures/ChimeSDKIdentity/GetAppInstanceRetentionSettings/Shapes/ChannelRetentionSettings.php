<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\GetAppInstanceRetentionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $RetentionDays
 */
class ChannelRetentionSettings extends Shape
{
    /**
     * @param array{RetentionDays?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
