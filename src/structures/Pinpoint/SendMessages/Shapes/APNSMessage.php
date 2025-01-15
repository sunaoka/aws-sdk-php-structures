<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $APNSPushType
 * @property 'OPEN_APP'|'DEEP_LINK'|'URL'|null $Action
 * @property int|null $Badge
 * @property string|null $Body
 * @property string|null $Category
 * @property string|null $CollapseId
 * @property array<string, string>|null $Data
 * @property string|null $MediaUrl
 * @property string|null $PreferredAuthenticationMethod
 * @property string|null $Priority
 * @property string|null $RawContent
 * @property bool|null $SilentPush
 * @property string|null $Sound
 * @property array<string, list<string>>|null $Substitutions
 * @property string|null $ThreadId
 * @property int|null $TimeToLive
 * @property string|null $Title
 * @property string|null $Url
 */
class APNSMessage extends Shape
{
    /**
     * @param array{
     *     APNSPushType?: string|null,
     *     Action?: 'OPEN_APP'|'DEEP_LINK'|'URL'|null,
     *     Badge?: int|null,
     *     Body?: string|null,
     *     Category?: string|null,
     *     CollapseId?: string|null,
     *     Data?: array<string, string>|null,
     *     MediaUrl?: string|null,
     *     PreferredAuthenticationMethod?: string|null,
     *     Priority?: string|null,
     *     RawContent?: string|null,
     *     SilentPush?: bool|null,
     *     Sound?: string|null,
     *     Substitutions?: array<string, list<string>>|null,
     *     ThreadId?: string|null,
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
