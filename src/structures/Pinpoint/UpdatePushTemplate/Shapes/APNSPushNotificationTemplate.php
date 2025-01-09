<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdatePushTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OPEN_APP'|'DEEP_LINK'|'URL' $Action
 * @property string $Body
 * @property string $MediaUrl
 * @property string $RawContent
 * @property string $Sound
 * @property string $Title
 * @property string $Url
 */
class APNSPushNotificationTemplate extends Shape
{
    /**
     * @param array{
     *     Action?: 'OPEN_APP'|'DEEP_LINK'|'URL',
     *     Body?: string,
     *     MediaUrl?: string,
     *     RawContent?: string,
     *     Sound?: string,
     *     Title?: string,
     *     Url?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
