<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetTransformer\Shapes;

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
