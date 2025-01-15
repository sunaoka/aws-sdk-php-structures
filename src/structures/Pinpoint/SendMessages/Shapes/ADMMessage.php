<?php

namespace Sunaoka\Aws\Structures\Pinpoint\SendMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OPEN_APP'|'DEEP_LINK'|'URL'|null $Action
 * @property string|null $Body
 * @property string|null $ConsolidationKey
 * @property array<string, string>|null $Data
 * @property string|null $ExpiresAfter
 * @property string|null $IconReference
 * @property string|null $ImageIconUrl
 * @property string|null $ImageUrl
 * @property string|null $MD5
 * @property string|null $RawContent
 * @property bool|null $SilentPush
 * @property string|null $SmallImageIconUrl
 * @property string|null $Sound
 * @property array<string, list<string>>|null $Substitutions
 * @property string|null $Title
 * @property string|null $Url
 */
class ADMMessage extends Shape
{
    /**
     * @param array{
     *     Action?: 'OPEN_APP'|'DEEP_LINK'|'URL'|null,
     *     Body?: string|null,
     *     ConsolidationKey?: string|null,
     *     Data?: array<string, string>|null,
     *     ExpiresAfter?: string|null,
     *     IconReference?: string|null,
     *     ImageIconUrl?: string|null,
     *     ImageUrl?: string|null,
     *     MD5?: string|null,
     *     RawContent?: string|null,
     *     SilentPush?: bool|null,
     *     SmallImageIconUrl?: string|null,
     *     Sound?: string|null,
     *     Substitutions?: array<string, list<string>>|null,
     *     Title?: string|null,
     *     Url?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
