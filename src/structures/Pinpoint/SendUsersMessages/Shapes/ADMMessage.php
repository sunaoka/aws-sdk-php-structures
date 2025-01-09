<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendUsersMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OPEN_APP'|'DEEP_LINK'|'URL' $Action
 * @property string $Body
 * @property string $ConsolidationKey
 * @property array<string, string> $Data
 * @property string $ExpiresAfter
 * @property string $IconReference
 * @property string $ImageIconUrl
 * @property string $ImageUrl
 * @property string $MD5
 * @property string $RawContent
 * @property bool $SilentPush
 * @property string $SmallImageIconUrl
 * @property string $Sound
 * @property array<string, list<string>> $Substitutions
 * @property string $Title
 * @property string $Url
 */
class ADMMessage extends Shape
{
    /**
     * @param array{
     *     Action?: 'OPEN_APP'|'DEEP_LINK'|'URL',
     *     Body?: string,
     *     ConsolidationKey?: string,
     *     Data?: array<string, string>,
     *     ExpiresAfter?: string,
     *     IconReference?: string,
     *     ImageIconUrl?: string,
     *     ImageUrl?: string,
     *     MD5?: string,
     *     RawContent?: string,
     *     SilentPush?: bool,
     *     SmallImageIconUrl?: string,
     *     Sound?: string,
     *     Substitutions?: array<string, list<string>>,
     *     Title?: string,
     *     Url?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
