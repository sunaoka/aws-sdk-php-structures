<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ACLToApply
 */
class ACLsUpdateStatus extends Shape
{
    /**
     * @param array{ACLToApply?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
