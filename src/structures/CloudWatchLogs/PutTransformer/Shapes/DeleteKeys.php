<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $withKeys
 */
class DeleteKeys extends Shape
{
    /**
     * @param array{withKeys: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
