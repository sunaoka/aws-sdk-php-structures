<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetUserPoolSessionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 100> $MaxPerUser
 */
class UserPoolTokenSessionConfigType extends Shape
{
    /**
     * @param array{MaxPerUser: int<1, 100>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
