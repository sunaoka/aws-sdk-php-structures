<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CopyValueEntry> $entries
 */
class CopyValue extends Shape
{
    /**
     * @param array{entries: list<CopyValueEntry>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
