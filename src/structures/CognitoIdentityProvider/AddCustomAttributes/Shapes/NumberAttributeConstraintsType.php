<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AddCustomAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MinValue
 * @property string $MaxValue
 */
class NumberAttributeConstraintsType extends Shape
{
    /**
     * @param array{
     *     MinValue?: string,
     *     MaxValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
