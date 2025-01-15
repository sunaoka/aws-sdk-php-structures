<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DetachedObjectIdentifier
 */
class BatchDetachFromIndexResponse extends Shape
{
    /**
     * @param array{DetachedObjectIdentifier?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
