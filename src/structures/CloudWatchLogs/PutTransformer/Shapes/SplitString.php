<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SplitStringEntry> $entries
 */
class SplitString extends Shape
{
    /**
     * @param array{entries: list<SplitStringEntry>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
