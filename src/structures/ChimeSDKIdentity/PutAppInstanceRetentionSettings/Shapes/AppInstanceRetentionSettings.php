<?php

namespace Sunaoka\Aws\Structures\ChimeSDKIdentity\PutAppInstanceRetentionSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ChannelRetentionSettings|null $ChannelRetentionSettings
 */
class AppInstanceRetentionSettings extends Shape
{
    /**
     * @param array{ChannelRetentionSettings?: ChannelRetentionSettings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
