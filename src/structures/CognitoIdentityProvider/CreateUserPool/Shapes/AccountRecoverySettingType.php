<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RecoveryOptionType> $RecoveryMechanisms
 */
class AccountRecoverySettingType extends Shape
{
    /**
     * @param array{RecoveryMechanisms?: list<RecoveryOptionType>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
