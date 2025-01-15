<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetPushTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OPEN_APP'|'DEEP_LINK'|'URL'|null $Action
 * @property string|null $Body
 * @property string|null $ImageIconUrl
 * @property string|null $ImageUrl
 * @property string|null $RawContent
 * @property string|null $SmallImageIconUrl
 * @property string|null $Sound
 * @property string|null $Title
 * @property string|null $Url
 */
class AndroidPushNotificationTemplate extends Shape
{
    /**
     * @param array{
     *     Action?: 'OPEN_APP'|'DEEP_LINK'|'URL'|null,
     *     Body?: string|null,
     *     ImageIconUrl?: string|null,
     *     ImageUrl?: string|null,
     *     RawContent?: string|null,
     *     SmallImageIconUrl?: string|null,
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
