<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $quoteCharacter
 * @property string|null $delimiter
 * @property list<string>|null $columns
 * @property string|null $source
 */
class CSV extends Shape
{
    /**
     * @param array{
     *     quoteCharacter?: string|null,
     *     delimiter?: string|null,
     *     columns?: list<string>|null,
     *     source?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
