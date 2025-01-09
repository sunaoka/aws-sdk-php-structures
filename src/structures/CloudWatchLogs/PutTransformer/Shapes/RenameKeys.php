<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RenameKeyEntry> $entries
 */
class RenameKeys extends Shape
{
    /**
     * @param array{entries: list<RenameKeyEntry>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
