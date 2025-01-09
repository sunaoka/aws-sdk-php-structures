<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\GetAppInstanceRetentionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 5475> $RetentionDays
 */
class ChannelRetentionSettings extends Shape
{
    /**
     * @param array{RetentionDays?: int<1, 5475>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
