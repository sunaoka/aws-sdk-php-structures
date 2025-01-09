<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendUsersMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OPEN_APP'|'DEEP_LINK'|'URL' $Action
 * @property string $Body
 * @property string $CollapseKey
 * @property array<string, string> $Data
 * @property string $IconReference
 * @property string $ImageIconUrl
 * @property string $ImageUrl
 * @property string $PreferredAuthenticationMethod
 * @property string $Priority
 * @property string $RawContent
 * @property string $RestrictedPackageName
 * @property bool $SilentPush
 * @property string $SmallImageIconUrl
 * @property string $Sound
 * @property array<string, list<string>> $Substitutions
 * @property int $TimeToLive
 * @property string $Title
 * @property string $Url
 */
class GCMMessage extends Shape
{
    /**
     * @param array{
     *     Action?: 'OPEN_APP'|'DEEP_LINK'|'URL',
     *     Body?: string,
     *     CollapseKey?: string,
     *     Data?: array<string, string>,
     *     IconReference?: string,
     *     ImageIconUrl?: string,
     *     ImageUrl?: string,
     *     PreferredAuthenticationMethod?: string,
     *     Priority?: string,
     *     RawContent?: string,
     *     RestrictedPackageName?: string,
     *     SilentPush?: bool,
     *     SmallImageIconUrl?: string,
     *     Sound?: string,
     *     Substitutions?: array<string, list<string>>,
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
