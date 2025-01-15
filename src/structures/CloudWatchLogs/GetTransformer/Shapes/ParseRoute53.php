<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $source
 */
class ParseRoute53 extends Shape
{
    /**
     * @param array{source?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
