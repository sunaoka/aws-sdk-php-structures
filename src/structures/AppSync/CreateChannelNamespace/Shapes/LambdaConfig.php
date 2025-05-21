<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateChannelNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REQUEST_RESPONSE'|'EVENT'|null $invokeType
 */
class LambdaConfig extends Shape
{
    /**
     * @param array{invokeType?: 'REQUEST_RESPONSE'|'EVENT'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
