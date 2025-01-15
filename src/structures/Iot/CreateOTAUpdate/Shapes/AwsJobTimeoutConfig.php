<?php

namespace Sunaoka\Aws\Structures\Iot\CreateOTAUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $inProgressTimeoutInMinutes
 */
class AwsJobTimeoutConfig extends Shape
{
    /**
     * @param array{inProgressTimeoutInMinutes?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
