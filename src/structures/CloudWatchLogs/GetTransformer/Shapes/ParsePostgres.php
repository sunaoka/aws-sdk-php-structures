<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $source
 */
class ParsePostgres extends Shape
{
    /**
     * @param array{source?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
