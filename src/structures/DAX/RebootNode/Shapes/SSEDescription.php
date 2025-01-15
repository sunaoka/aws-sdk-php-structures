<?php

namespace Sunaoka\Aws\Structures\DAX\RebootNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|null $Status
 */
class SSEDescription extends Shape
{
    /**
     * @param array{Status?: 'ENABLING'|'ENABLED'|'DISABLING'|'DISABLED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
