<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $withKeys
 */
class UpperCaseString extends Shape
{
    /**
     * @param array{withKeys: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
