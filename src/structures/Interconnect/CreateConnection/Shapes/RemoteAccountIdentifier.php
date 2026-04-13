<?php

namespace Sunaoka\Aws\Structures\Interconnect\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $identifier
 */
class RemoteAccountIdentifier extends Shape
{
    /**
     * @param array{identifier?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
