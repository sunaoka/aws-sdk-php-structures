<?php

namespace Sunaoka\Aws\Structures\DAX\DecreaseReplicationFactor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED' $Status
 */
class SSEDescription extends Shape
{
    /**
     * @param array{Status?: 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
