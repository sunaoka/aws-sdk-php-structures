<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $detachedObjectIdentifier
 */
class BatchDetachObjectResponse extends Shape
{
    /**
     * @param array{detachedObjectIdentifier?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
