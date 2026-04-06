<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\CreateWorker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $degrees
 */
class Orientation extends Shape
{
    /**
     * @param array{degrees?: double|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
