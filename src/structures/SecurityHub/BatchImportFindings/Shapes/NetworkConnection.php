<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INBOUND'|'OUTBOUND' $Direction
 */
class NetworkConnection extends Shape
{
    /**
     * @param array{Direction?: 'INBOUND'|'OUTBOUND'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
