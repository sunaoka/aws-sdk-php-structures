<?php

namespace Sunaoka\Aws\Structures\SecretsManager\GetRandomPassword;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $PasswordLength
 * @property string $ExcludeCharacters
 * @property bool $ExcludeNumbers
 * @property bool $ExcludePunctuation
 * @property bool $ExcludeUppercase
 * @property bool $ExcludeLowercase
 * @property bool $IncludeSpace
 * @property bool $RequireEachIncludedType
 */
class GetRandomPasswordRequest extends Request
{
    /**
     * @param array{
     *     PasswordLength?: int,
     *     ExcludeCharacters?: string,
     *     ExcludeNumbers?: bool,
     *     ExcludePunctuation?: bool,
     *     ExcludeUppercase?: bool,
     *     ExcludeLowercase?: bool,
     *     IncludeSpace?: bool,
     *     RequireEachIncludedType?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
