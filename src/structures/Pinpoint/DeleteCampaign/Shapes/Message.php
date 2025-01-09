<?php

namespace Sunaoka\Aws\Structures\Pinpoint\DeleteCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OPEN_APP'|'DEEP_LINK'|'URL' $Action
 * @property string $Body
 * @property string $ImageIconUrl
 * @property string $ImageSmallIconUrl
 * @property string $ImageUrl
 * @property string $JsonBody
 * @property string $MediaUrl
 * @property string $RawContent
 * @property bool $SilentPush
 * @property int $TimeToLive
 * @property string $Title
 * @property string $Url
 */
class Message extends Shape
{
    /**
     * @param array{
     *     Action?: 'OPEN_APP'|'DEEP_LINK'|'URL',
     *     Body?: string,
     *     ImageIconUrl?: string,
     *     ImageSmallIconUrl?: string,
     *     ImageUrl?: string,
     *     JsonBody?: string,
     *     MediaUrl?: string,
     *     RawContent?: string,
     *     SilentPush?: bool,
     *     TimeToLive?: int,
     *     Title?: string,
     *     Url?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
