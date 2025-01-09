<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\TestTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $source
 * @property string $match
 */
class Grok extends Shape
{
    /**
     * @param array{
     *     source?: string,
     *     match: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
