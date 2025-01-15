<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OPEN_APP'|'DEEP_LINK'|'URL'|null $Action
 * @property string|null $Body
 * @property string|null $ImageIconUrl
 * @property string|null $ImageSmallIconUrl
 * @property string|null $ImageUrl
 * @property string|null $JsonBody
 * @property string|null $MediaUrl
 * @property string|null $RawContent
 * @property bool|null $SilentPush
 * @property int|null $TimeToLive
 * @property string|null $Title
 * @property string|null $Url
 */
class Message extends Shape
{
    /**
     * @param array{
     *     Action?: 'OPEN_APP'|'DEEP_LINK'|'URL'|null,
     *     Body?: string|null,
     *     ImageIconUrl?: string|null,
     *     ImageSmallIconUrl?: string|null,
     *     ImageUrl?: string|null,
     *     JsonBody?: string|null,
     *     MediaUrl?: string|null,
     *     RawContent?: string|null,
     *     SilentPush?: bool|null,
     *     TimeToLive?: int|null,
     *     Title?: string|null,
     *     Url?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
