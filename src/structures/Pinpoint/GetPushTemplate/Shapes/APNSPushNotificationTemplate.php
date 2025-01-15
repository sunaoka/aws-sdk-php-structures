<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetPushTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OPEN_APP'|'DEEP_LINK'|'URL'|null $Action
 * @property string|null $Body
 * @property string|null $MediaUrl
 * @property string|null $RawContent
 * @property string|null $Sound
 * @property string|null $Title
 * @property string|null $Url
 */
class APNSPushNotificationTemplate extends Shape
{
    /**
     * @param array{
     *     Action?: 'OPEN_APP'|'DEEP_LINK'|'URL'|null,
     *     Body?: string|null,
     *     MediaUrl?: string|null,
     *     RawContent?: string|null,
     *     Sound?: string|null,
     *     Title?: string|null,
     *     Url?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
