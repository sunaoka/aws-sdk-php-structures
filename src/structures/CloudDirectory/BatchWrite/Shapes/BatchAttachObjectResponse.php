<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchWrite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $attachedObjectIdentifier
 */
class BatchAttachObjectResponse extends Shape
{
    /**
     * @param array{attachedObjectIdentifier?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
