<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendUsersMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OPEN_APP'|'DEEP_LINK'|'URL'|null $Action
 * @property string|null $Body
 * @property string|null $CollapseKey
 * @property array<string, string>|null $Data
 * @property string|null $IconReference
 * @property string|null $ImageIconUrl
 * @property string|null $ImageUrl
 * @property string|null $PreferredAuthenticationMethod
 * @property string|null $Priority
 * @property string|null $RawContent
 * @property string|null $RestrictedPackageName
 * @property bool|null $SilentPush
 * @property string|null $SmallImageIconUrl
 * @property string|null $Sound
 * @property array<string, list<string>>|null $Substitutions
 * @property int|null $TimeToLive
 * @property string|null $Title
 * @property string|null $Url
 */
class GCMMessage extends Shape
{
    /**
     * @param array{
     *     Action?: 'OPEN_APP'|'DEEP_LINK'|'URL'|null,
     *     Body?: string|null,
     *     CollapseKey?: string|null,
     *     Data?: array<string, string>|null,
     *     IconReference?: string|null,
     *     ImageIconUrl?: string|null,
     *     ImageUrl?: string|null,
     *     PreferredAuthenticationMethod?: string|null,
     *     Priority?: string|null,
     *     RawContent?: string|null,
     *     RestrictedPackageName?: string|null,
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
