<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\TestTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $quoteCharacter
 * @property string $delimiter
 * @property list<string> $columns
 * @property string $source
 */
class CSV extends Shape
{
    /**
     * @param array{
     *     quoteCharacter?: string,
     *     delimiter?: string,
     *     columns?: list<string>,
     *     source?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
