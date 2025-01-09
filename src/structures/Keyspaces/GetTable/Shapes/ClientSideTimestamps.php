<?php

namespace Sunaoka\Aws\Structures\Keyspaces\GetTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED' $status
 */
class ClientSideTimestamps extends Shape
{
    /**
     * @param array{status: 'ENABLED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
