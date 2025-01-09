<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\CreateEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $desiredCapacity
 */
class HighAvailabilityConfig extends Shape
{
    /**
     * @param array{desiredCapacity: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
