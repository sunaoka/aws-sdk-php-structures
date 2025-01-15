<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MinValue
 * @property string|null $MaxValue
 */
class NumberAttributeConstraintsType extends Shape
{
    /**
     * @param array{
     *     MinValue?: string|null,
     *     MaxValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
