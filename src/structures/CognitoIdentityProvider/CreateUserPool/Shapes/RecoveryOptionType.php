<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 2> $Priority
 * @property 'verified_email'|'verified_phone_number'|'admin_only' $Name
 */
class RecoveryOptionType extends Shape
{
    /**
     * @param array{
     *     Priority: int<1, 2>,
     *     Name: 'verified_email'|'verified_phone_number'|'admin_only'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
