<?php

namespace Sunaoka\Aws\Structures\HealthLake\UpdateProfileWithAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Message
 */
class ProgressEvent extends Shape
{
    /**
     * @param array{Message: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
