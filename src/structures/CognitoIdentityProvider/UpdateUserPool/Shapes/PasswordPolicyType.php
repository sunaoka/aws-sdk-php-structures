<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<6, 99> $MinimumLength
 * @property bool $RequireUppercase
 * @property bool $RequireLowercase
 * @property bool $RequireNumbers
 * @property bool $RequireSymbols
 * @property int<0, 24> $PasswordHistorySize
 * @property int<0, 365> $TemporaryPasswordValidityDays
 */
class PasswordPolicyType extends Shape
{
    /**
     * @param array{
     *     MinimumLength?: int<6, 99>,
     *     RequireUppercase?: bool,
     *     RequireLowercase?: bool,
     *     RequireNumbers?: bool,
     *     RequireSymbols?: bool,
     *     PasswordHistorySize?: int<0, 24>,
     *     TemporaryPasswordValidityDays?: int<0, 365>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
