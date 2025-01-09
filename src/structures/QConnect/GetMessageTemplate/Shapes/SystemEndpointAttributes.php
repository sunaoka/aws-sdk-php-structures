<?php

namespace Sunaoka\Aws\Structures\QConnect\GetMessageTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $address
 */
class SystemEndpointAttributes extends Shape
{
    /**
     * @param array{address?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
