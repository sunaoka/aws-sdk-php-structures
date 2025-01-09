<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrimarySource
 */
class SourcePriority extends Shape
{
    /**
     * @param array{PrimarySource?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
