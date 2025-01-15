<?php

namespace Sunaoka\Aws\Structures\LocationService\ListKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Active'|'Expired'|null $KeyStatus
 */
class ApiKeyFilter extends Shape
{
    /**
     * @param array{KeyStatus?: 'Active'|'Expired'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
