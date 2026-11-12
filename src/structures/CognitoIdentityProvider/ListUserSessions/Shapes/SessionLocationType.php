<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListUserSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $City
 * @property string|null $Country
 */
class SessionLocationType extends Shape
{
    /**
     * @param array{
     *     City?: string|null,
     *     Country?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
