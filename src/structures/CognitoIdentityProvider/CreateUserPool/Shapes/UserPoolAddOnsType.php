<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OFF'|'AUDIT'|'ENFORCED' $AdvancedSecurityMode
 */
class UserPoolAddOnsType extends Shape
{
    /**
     * @param array{AdvancedSecurityMode: 'OFF'|'AUDIT'|'ENFORCED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
