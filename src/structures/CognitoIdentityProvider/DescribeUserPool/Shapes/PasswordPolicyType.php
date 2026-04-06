<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<6, 99>|null $MinimumLength
 * @property bool|null $RequireUppercase
 * @property bool|null $RequireLowercase
 * @property bool|null $RequireNumbers
 * @property bool|null $RequireSymbols
 * @property int<0, 24>|null $PasswordHistorySize
 * @property int<0, 365>|null $TemporaryPasswordValidityDays
 */
class PasswordPolicyType extends Shape
{
    /**
     * @param array{
     *     MinimumLength?: int<6, 99>|null,
     *     RequireUppercase?: bool|null,
     *     RequireLowercase?: bool|null,
     *     RequireNumbers?: bool|null,
     *     RequireSymbols?: bool|null,
     *     PasswordHistorySize?: int<0, 24>|null,
     *     TemporaryPasswordValidityDays?: int<0, 365>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
