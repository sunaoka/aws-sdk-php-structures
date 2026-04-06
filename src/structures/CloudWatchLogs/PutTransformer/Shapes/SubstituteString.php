<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SubstituteStringEntry> $entries
 */
class SubstituteString extends Shape
{
    /**
     * @param array{entries: list<SubstituteStringEntry>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
