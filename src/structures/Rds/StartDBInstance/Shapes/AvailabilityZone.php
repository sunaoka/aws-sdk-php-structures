<?php

namespace Sunaoka\Aws\Structures\Rds\StartDBInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 */
class AvailabilityZone extends Shape
{
    /**
     * @param array{Name?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
