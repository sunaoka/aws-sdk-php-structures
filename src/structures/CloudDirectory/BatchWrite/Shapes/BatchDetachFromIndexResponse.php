<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DetachedObjectIdentifier
 */
class BatchDetachFromIndexResponse extends Shape
{
    /**
     * @param array{DetachedObjectIdentifier?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
