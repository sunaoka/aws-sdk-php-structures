<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateMessageTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $address
 */
class SystemEndpointAttributes extends Shape
{
    /**
     * @param array{address?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
