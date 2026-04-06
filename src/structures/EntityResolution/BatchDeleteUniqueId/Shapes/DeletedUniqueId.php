<?php

namespace Sunaoka\Aws\Structures\EntityResolution\BatchDeleteUniqueId\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $uniqueId
 */
class DeletedUniqueId extends Shape
{
    /**
     * @param array{uniqueId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
