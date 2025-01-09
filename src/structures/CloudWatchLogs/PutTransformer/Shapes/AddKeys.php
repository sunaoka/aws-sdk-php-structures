<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AddKeyEntry> $entries
 */
class AddKeys extends Shape
{
    /**
     * @param array{entries: list<AddKeyEntry>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
