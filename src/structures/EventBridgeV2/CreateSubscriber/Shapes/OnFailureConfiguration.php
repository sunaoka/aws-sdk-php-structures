<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\CreateSubscriber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 */
class OnFailureConfiguration extends Shape
{
    /**
     * @param array{Arn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
