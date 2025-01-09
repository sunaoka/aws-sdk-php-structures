<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendUsersMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $APNSPushType
 * @property 'OPEN_APP'|'DEEP_LINK'|'URL' $Action
 * @property int $Badge
 * @property string $Body
 * @property string $Category
 * @property string $CollapseId
 * @property array<string, string> $Data
 * @property string $MediaUrl
 * @property string $PreferredAuthenticationMethod
 * @property string $Priority
 * @property string $RawContent
 * @property bool $SilentPush
 * @property string $Sound
 * @property array<string, list<string>> $Substitutions
 * @property string $ThreadId
 * @property int $TimeToLive
 * @property string $Title
 * @property string $Url
 */
class APNSMessage extends Shape
{
    /**
     * @param array{
     *     APNSPushType?: string,
     *     Action?: 'OPEN_APP'|'DEEP_LINK'|'URL',
     *     Badge?: int,
     *     Body?: string,
     *     Category?: string,
     *     CollapseId?: string,
     *     Data?: array<string, string>,
     *     MediaUrl?: string,
     *     PreferredAuthenticationMethod?: string,
     *     Priority?: string,
     *     RawContent?: string,
     *     SilentPush?: bool,
     *     Sound?: string,
     *     Substitutions?: array<string, list<string>>,
     *     ThreadId?: string,
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
