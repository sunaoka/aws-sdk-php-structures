<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateAccountPasswordPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MinimumPasswordLength
 * @property bool $RequireSymbols
 * @property bool $RequireNumbers
 * @property bool $RequireUppercaseCharacters
 * @property bool $RequireLowercaseCharacters
 * @property bool $AllowUsersToChangePassword
 * @property int $MaxPasswordAge
 * @property int $PasswordReusePrevention
 * @property bool $HardExpiry
 */
class UpdateAccountPasswordPolicyRequest extends Request
{
    /**
     * @param array{
     *     MinimumPasswordLength?: int,
     *     RequireSymbols?: bool,
     *     RequireNumbers?: bool,
     *     RequireUppercaseCharacters?: bool,
     *     RequireLowercaseCharacters?: bool,
     *     AllowUsersToChangePassword?: bool,
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
