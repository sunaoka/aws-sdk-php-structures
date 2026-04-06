<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $source
 */
class ParsePostgres extends Shape
{
    /**
     * @param array{source?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
