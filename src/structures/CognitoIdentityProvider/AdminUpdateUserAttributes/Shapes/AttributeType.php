<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminUpdateUserAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Value
 */
class AttributeType extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
