<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ObjectIdentifier
 */
class BatchUpdateObjectAttributesResponse extends Shape
{
    /**
     * @param array{ObjectIdentifier?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
