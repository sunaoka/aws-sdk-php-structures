<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateSourceEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RouterOutputArn
 */
class RouterOutputSourceEndpointConfiguration extends Shape
{
    /**
     * @param array{RouterOutputArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
