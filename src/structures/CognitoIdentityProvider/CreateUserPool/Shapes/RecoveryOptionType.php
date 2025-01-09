<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Priority
 * @property 'verified_email'|'verified_phone_number'|'admin_only' $Name
 */
class RecoveryOptionType extends Shape
{
    /**
     * @param array{
     *     Priority: int,
     *     Name: 'verified_email'|'verified_phone_number'|'admin_only'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
