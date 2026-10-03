<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AcrValue
 */
class AcrLevelConfigType extends Shape
{
    /**
     * @param array{AcrValue: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
