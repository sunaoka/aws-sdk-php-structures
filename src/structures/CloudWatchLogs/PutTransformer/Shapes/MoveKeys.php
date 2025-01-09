<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MoveKeyEntry> $entries
 */
class MoveKeys extends Shape
{
    /**
     * @param array{entries: list<MoveKeyEntry>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
