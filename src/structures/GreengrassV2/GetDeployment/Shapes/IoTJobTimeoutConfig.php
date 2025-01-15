<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\GetDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $inProgressTimeoutInMinutes
 */
class IoTJobTimeoutConfig extends Shape
{
    /**
     * @param array{inProgressTimeoutInMinutes?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
