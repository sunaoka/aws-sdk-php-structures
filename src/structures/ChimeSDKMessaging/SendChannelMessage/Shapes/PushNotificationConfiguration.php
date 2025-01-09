<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\SendChannelMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Title
 * @property string $Body
 * @property 'DEFAULT'|'VOIP' $Type
 */
class PushNotificationConfiguration extends Shape
{
    /**
     * @param array{
     *     Title?: string,
     *     Body?: string,
     *     Type?: 'DEFAULT'|'VOIP'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
