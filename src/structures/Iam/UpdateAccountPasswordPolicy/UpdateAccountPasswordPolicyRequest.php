<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateAccountPasswordPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<6, 128>|null $MinimumPasswordLength
 * @property bool|null $RequireSymbols
 * @property bool|null $RequireNumbers
 * @property bool|null $RequireUppercaseCharacters
 * @property bool|null $RequireLowercaseCharacters
 * @property bool|null $AllowUsersToChangePassword
 * @property int<1, 1095>|null $MaxPasswordAge
 * @property int<1, 24>|null $PasswordReusePrevention
 * @property bool|null $HardExpiry
 */
class UpdateAccountPasswordPolicyRequest extends Request
{
    /**
     * @param array{
     *     MinimumPasswordLength?: int<6, 128>|null,
     *     RequireSymbols?: bool|null,
     *     RequireNumbers?: bool|null,
     *     RequireUppercaseCharacters?: bool|null,
     *     RequireLowercaseCharacters?: bool|null,
     *     AllowUsersToChangePassword?: bool|null,
     *     MaxPasswordAge?: int<1, 1095>|null,
     *     PasswordReusePrevention?: int<1, 24>|null,
     *     HardExpiry?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
