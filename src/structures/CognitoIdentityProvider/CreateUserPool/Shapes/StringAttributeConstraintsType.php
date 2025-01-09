<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MinLength
 * @property string $MaxLength
 */
class StringAttributeConstraintsType extends Shape
{
    /**
     * @param array{
     *     MinLength?: string,
     *     MaxLength?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
