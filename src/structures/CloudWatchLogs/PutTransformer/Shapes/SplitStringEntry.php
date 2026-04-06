<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $source
 * @property string $delimiter
 */
class SplitStringEntry extends Shape
{
    /**
     * @param array{
     *     source: string,
     *     delimiter: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
