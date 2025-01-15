<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MinLength
 * @property string|null $MaxLength
 */
class StringAttributeConstraintsType extends Shape
{
    /**
     * @param array{
     *     MinLength?: string|null,
     *     MaxLength?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
