<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MinimumLength
 * @property bool $RequireUppercase
 * @property bool $RequireLowercase
 * @property bool $RequireNumbers
 * @property bool $RequireSymbols
 * @property int $PasswordHistorySize
 * @property int $TemporaryPasswordValidityDays
 */
class PasswordPolicyType extends Shape
{
    /**
     * @param array{
     *     MinimumLength?: int,
     *     RequireUppercase?: bool,
     *     RequireLowercase?: bool,
     *     RequireNumbers?: bool,
     *     RequireSymbols?: bool,
     *     PasswordHistorySize?: int,
     *     TemporaryPasswordValidityDays?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
