<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendUsersMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OPEN_APP'|'DEEP_LINK'|'URL'|null $Action
 * @property string|null $Body
 * @property array<string, string>|null $Data
 * @property string|null $IconReference
 * @property string|null $ImageIconUrl
 * @property string|null $ImageUrl
 * @property string|null $RawContent
 * @property bool|null $SilentPush
 * @property string|null $SmallImageIconUrl
 * @property string|null $Sound
 * @property array<string, list<string>>|null $Substitutions
 * @property int|null $TimeToLive
 * @property string|null $Title
 * @property string|null $Url
 */
class BaiduMessage extends Shape
{
    /**
     * @param array{
     *     Action?: 'OPEN_APP'|'DEEP_LINK'|'URL'|null,
     *     Body?: string|null,
     *     Data?: array<string, string>|null,
     *     IconReference?: string|null,
     *     ImageIconUrl?: string|null,
     *     ImageUrl?: string|null,
     *     RawContent?: string|null,
     *     SilentPush?: bool|null,
     *     SmallImageIconUrl?: string|null,
     *     Sound?: string|null,
     *     Substitutions?: array<string, list<string>>|null,
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
