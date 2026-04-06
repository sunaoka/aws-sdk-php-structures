<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INBOUND'|'OUTBOUND'|null $Direction
 */
class NetworkConnection extends Shape
{
    /**
     * @param array{Direction?: 'INBOUND'|'OUTBOUND'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
