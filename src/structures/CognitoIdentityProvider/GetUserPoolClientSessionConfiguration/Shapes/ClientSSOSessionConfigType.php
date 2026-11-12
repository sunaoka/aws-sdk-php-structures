<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetUserPoolClientSessionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 129600> $MaxValidityMinutes
 */
class ClientSSOSessionConfigType extends Shape
{
    /**
     * @param array{MaxValidityMinutes: int<0, 129600>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
