<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $source
 */
class ParseWAF extends Shape
{
    /**
     * @param array{source?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
