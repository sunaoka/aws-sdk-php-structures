<?php

namespace Sunaoka\Aws\Structures\Iam\GetAccountPasswordPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MinimumPasswordLength
 * @property bool $RequireSymbols
 * @property bool $RequireNumbers
 * @property bool $RequireUppercaseCharacters
 * @property bool $RequireLowercaseCharacters
 * @property bool $AllowUsersToChangePassword
 * @property bool $ExpirePasswords
 * @property int $MaxPasswordAge
 * @property int $PasswordReusePrevention
 * @property bool $HardExpiry
 */
class PasswordPolicy extends Shape
{
    /**
     * @param array{
     *     MinimumPasswordLength?: int,
     *     RequireSymbols?: bool,
     *     RequireNumbers?: bool,
     *     RequireUppercaseCharacters?: bool,
     *     RequireLowercaseCharacters?: bool,
     *     AllowUsersToChangePassword?: bool,
     *     ExpirePasswords?: bool,
     *     MaxPasswordAge?: int,
     *     PasswordReusePrevention?: int,
     *     HardExpiry?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
