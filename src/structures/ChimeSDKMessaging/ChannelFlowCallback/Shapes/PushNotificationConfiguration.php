<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\ChannelFlowCallback\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Title
 * @property string|null $Body
 * @property 'DEFAULT'|'VOIP'|null $Type
 */
class PushNotificationConfiguration extends Shape
{
    /**
     * @param array{
     *     Title?: string|null,
     *     Body?: string|null,
     *     Type?: 'DEFAULT'|'VOIP'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
