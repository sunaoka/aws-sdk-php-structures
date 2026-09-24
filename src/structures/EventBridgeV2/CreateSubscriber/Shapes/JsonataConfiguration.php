<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\CreateSubscriber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Expression
 */
class JsonataConfiguration extends Shape
{
    /**
     * @param array{Expression: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
