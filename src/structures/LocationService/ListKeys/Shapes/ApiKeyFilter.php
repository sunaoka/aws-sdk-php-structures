<?php

namespace Sunaoka\Aws\Structures\LocationService\ListKeys\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Active'|'Expired' $KeyStatus
 */
class ApiKeyFilter extends Shape
{
    /**
     * @param array{KeyStatus?: 'Active'|'Expired'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
