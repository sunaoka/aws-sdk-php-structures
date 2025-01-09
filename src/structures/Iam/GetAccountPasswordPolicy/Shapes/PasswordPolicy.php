<?php

namespace Sunaoka\Aws\Structures\Iam\GetAccountPasswordPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<6, 128> $MinimumPasswordLength
 * @property bool $RequireSymbols
 * @property bool $RequireNumbers
 * @property bool $RequireUppercaseCharacters
 * @property bool $RequireLowercaseCharacters
 * @property bool $AllowUsersToChangePassword
 * @property bool $ExpirePasswords
 * @property int<1, 1095> $MaxPasswordAge
 * @property int<1, 24> $PasswordReusePrevention
 * @property bool $HardExpiry
 */
class PasswordPolicy extends Shape
{
    /**
     * @param array{
     *     MinimumPasswordLength?: int<6, 128>,
     *     RequireSymbols?: bool,
     *     RequireNumbers?: bool,
     *     RequireUppercaseCharacters?: bool,
     *     RequireLowercaseCharacters?: bool,
     *     AllowUsersToChangePassword?: bool,
     *     ExpirePasswords?: bool,
     *     MaxPasswordAge?: int<1, 1095>,
     *     PasswordReusePrevention?: int<1, 24>,
     *     HardExpiry?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
