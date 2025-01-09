<?php

namespace Sunaoka\Aws\Structures\Chime\GetAppInstanceRetentionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ChannelRetentionSettings $ChannelRetentionSettings
 */
class AppInstanceRetentionSettings extends Shape
{
    /**
     * @param array{ChannelRetentionSettings?: ChannelRetentionSettings} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
