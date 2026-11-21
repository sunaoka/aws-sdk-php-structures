<?php

namespace Sunaoka\Aws\Structures\APIPortal\CreatePortal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property None|null $none
 * @property CognitoConfig|null $cognitoConfig
 */
class AuthorizationConfig extends Shape
{
    /**
     * @param array{
     *     none?: None|null,
     *     cognitoConfig?: CognitoConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
