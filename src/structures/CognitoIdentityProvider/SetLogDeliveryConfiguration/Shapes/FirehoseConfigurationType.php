<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetLogDeliveryConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StreamArn
 */
class FirehoseConfigurationType extends Shape
{
    /**
     * @param array{StreamArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
