<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\TestTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $withKeys
 */
class TrimString extends Shape
{
    /**
     * @param array{withKeys: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
