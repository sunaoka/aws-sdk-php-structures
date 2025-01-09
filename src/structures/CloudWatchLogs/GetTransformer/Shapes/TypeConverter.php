<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TypeConverterEntry> $entries
 */
class TypeConverter extends Shape
{
    /**
     * @param array{entries: list<TypeConverterEntry>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
