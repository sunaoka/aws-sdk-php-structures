<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttachedObjectIdentifier
 */
class BatchAttachToIndexResponse extends Shape
{
    /**
     * @param array{AttachedObjectIdentifier?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
