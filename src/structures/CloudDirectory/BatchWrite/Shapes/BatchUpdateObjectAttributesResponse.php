<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ObjectIdentifier
 */
class BatchUpdateObjectAttributesResponse extends Shape
{
    /**
     * @param array{ObjectIdentifier?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
