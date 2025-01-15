<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RecoveryOptionType>|null $RecoveryMechanisms
 */
class AccountRecoverySettingType extends Shape
{
    /**
     * @param array{RecoveryMechanisms?: list<RecoveryOptionType>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
