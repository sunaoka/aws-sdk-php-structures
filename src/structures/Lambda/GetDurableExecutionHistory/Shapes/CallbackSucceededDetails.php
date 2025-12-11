<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EventResult $Result
 */
class CallbackSucceededDetails extends Shape
{
    /**
     * @param array{Result: EventResult} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
