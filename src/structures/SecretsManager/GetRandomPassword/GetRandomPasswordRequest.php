<?php

namespace Sunaoka\Aws\Structures\SecretsManager\GetRandomPassword;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 4096>|null $PasswordLength
 * @property string|null $ExcludeCharacters
 * @property bool|null $ExcludeNumbers
 * @property bool|null $ExcludePunctuation
 * @property bool|null $ExcludeUppercase
 * @property bool|null $ExcludeLowercase
 * @property bool|null $IncludeSpace
 * @property bool|null $RequireEachIncludedType
 */
class GetRandomPasswordRequest extends Request
{
    /**
     * @param array{
     *     PasswordLength?: int<1, 4096>|null,
     *     ExcludeCharacters?: string|null,
     *     ExcludeNumbers?: bool|null,
     *     ExcludePunctuation?: bool|null,
     *     ExcludeUppercase?: bool|null,
     *     ExcludeLowercase?: bool|null,
     *     IncludeSpace?: bool|null,
     *     RequireEachIncludedType?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
