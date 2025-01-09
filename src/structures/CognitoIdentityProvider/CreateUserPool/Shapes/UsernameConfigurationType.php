<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $CaseSensitive
 */
class UsernameConfigurationType extends Shape
{
    /**
     * @param array{CaseSensitive: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
